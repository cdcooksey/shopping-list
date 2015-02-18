<?php

namespace Cooksey\FlappBundle\Command;

use Cooksey\FlappBundle\Factories\ApiClientInterface;
use Cooksey\FlappBundle\Factories\Symfony240OutputFactory;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Cooksey\FlappBundle\Entity\Product;
use Cooksey\FlappBundle\Factories\GuzzleApiFactory;

class UpcListenerCommand extends ContainerAwareCommand
{

    /**
     * @var string
     */
    private $upc = '';

    /**
     * @var InputInterface
     */
    private $input;
    /**
     * @var Symfony240OutputFactory
     */
    private $output;

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('upc:listener')
            ->setDescription('Listenings for UPCs entered on the CLI.')
            ->setHelp(<<<EOF
The <info>%command.name%</info> command greets somebody or everybody:

<info>php %command.full_name%</info>

The optional argument specifies who to greet:

<info>php %command.full_name%</info> Fabien
EOF
            );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $container = $this->getServices();
        $this->setOutput($output);
        $this->setInput($input);

        $output->writeln($container['formatter']->formatSection('Status', 'Application started. Listening for bar codes...'));

        $container = $this->getServices();

        while(true) {
            try {
                $upc = $container['dialog']->ask(
                    $output,
                    '<info>Please enter bar code or UPC:  </info>',
                    false
                );
                $this->setUpc($upc);
                $this->handleUpc();
            } catch(Exception $e) {
                $this->getOutput()->doError($e->getMessage());
            }
        }

    }

    /**
     * @return array
     */
    private function getServices()
    {
        // Get services from container.
        $services = array(
            'formatter' => $this->getHelperSet()->get('formatter'),
            'dialog'    => $this->getHelperSet()->get('dialog'),
            'em'        => $this->getContainer()->get('doctrine')->getManager(),
        );

        return $services;
    }

    private function handleUpc()
    {
        return $this->doUpc();
    }

    /**
     * @param ApiClientInterface $client
     * @return mixed
     */
    private function getProductFromApi(ApiClientInterface $client)
    {
        $response = $client->get($this->getUpc());
        $response['price'] = !empty($response['avg_price']) ? $response['avg_price'] : '0.00';
        return $response;
    }

    /**
     * Ensures that the UPC / bar code / ISBN / EAN  is 13 digits long.
     * @param string $upc
     * @return string
     */
    private function formatUpc($upc = '')
    {
        $count = 13;
        $remainder = 0;

        if(strlen($upc) < $count) {
            $remainder = $count - strlen($upc);
        }

        while($remainder > 0) {
            $upc = "0{$upc}";
            $remainder--;
        }
        return $upc;
    }

    /**
     * @return InputInterface
     */
    private function getInput()
    {
        return $this->input;
    }

    /**
     * @param InputInterface $input
     * @return $this
     */
    private function setInput(InputInterface $input)
    {
        $this->input = $input;
        return $this;
    }

    /**
     * @return Symfony240OutputFactory
     */
    private function getOutput()
    {
        return $this->output;
    }

    /**
     * @param OutputInterface $output
     * @return $this
     */
    private function setOutput(OutputInterface $output)
    {
        $this->output = new Symfony240OutputFactory($output);
        return $this;
    }


    /**
     * @return bool
     * @throws \Symfony\Component\Config\Definition\Exception\Exception
     */
    private function doUpc()
    {
        $upc = $this->validateUpc();

        $this->getOutput()->doInfo(array("Looking up UPC {$upc}"));

        $product = $this->getProductFromApi(new GuzzleApiFactory($this->getContainer()));

        if ($product['valid'] == 'false') {
            throw new Exception("Error! Unable to find product details for {$upc}.", 404);
        }

        $this->getOutput()->doInfo(array(
            "Found product: {$product['itemname']}",
            "Item description: {$product['description']}",
            "Found price: {$product['price']}"
        ));

        $entity = $this->getProductEntity()->findOneByUpc($this->getUpc());
        if (!$entity) {
            $this->saveNewProduct($product);
        }
        return true;
    }

    /**
     * @param string $upc
     * @return string
     * @throws \Symfony\Component\Config\Definition\Exception\Exception
     */
    private function setUpc($upc = "")
    {
        if (!$upc) {
            throw new Exception('Can not use empty UPC.', 403);
        }

        $this->upc = $upc;
        return $this->upc;
    }

    /**
     * @return string
     */
    private function getUpc(){
        return $this->upc;
    }

    /**
     * @return string
     */
    private function validateUpc()
    {
        $upc = $this->formatUpc($this->getUpc());
        $this->setUpc($upc);
        return $this->getUpc();
    }

    /**
     * @return \Cooksey\FlappBundle\Entity\ProductRepository
     */
    private function getProductEntity(){
        $container = $this->getServices();
        $em = $container['em'];
        return $em->getRepository('CookseyFlappBundle:Product');
    }

    private function saveNewProduct($product){
        $this->getOutput()->doInfo(array('Saving new product to local database.'));
        $entity = new Product();

        $entity
            ->setUpc($this->getUpc())
            ->setName($product['itemname'])
            ->setPrice($product['price']);

        $em = $this->getProductEntity();
        $em->persist($entity);
        $em->flush();
    }
}
