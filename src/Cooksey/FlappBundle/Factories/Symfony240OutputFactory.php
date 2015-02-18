<?php

namespace Cooksey\FlappBundle\Factories;

use Symfony\Component\Console\Output\OutputInterface;

class Symfony240OutputFactory implements CLIWriteInterface
{

    /**
     * @var Symfony\Component\Console\Output\OutputInterface
     */
    private $output;

    public function __construct(OutputInterface $output)
    {
        $this->setOutput($output);
    }

    /**
     * @param array $string
     * @return bool
     */
    public function doInfo(array $string)
    {
        $cmd = $this->getOutput();
        foreach($string as $message) {
            $cmd->writeln("<info>{$message}</info>");
        }
        return true;
    }

    public function doError($string = '')
    {
        return $this->getOutput()->writeln("<error>{$string}</error>");
    }

    /**
     * @param OutputInterface $output
     * @return $this
     */
    private function setOutput($output)
    {
        $this->output = $output;
        return $this;
    }

    /**
     * @return Symfony\Component\Console\Output\OutputInterface
     */
    private function getOutput()
    {
        return $this->output;
    }
}