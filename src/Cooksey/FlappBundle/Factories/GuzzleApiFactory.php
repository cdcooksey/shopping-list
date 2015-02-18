<?php

namespace Cooksey\FlappBundle\Factories;

use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\DependencyInjection\ContainerInterface;

class GuzzleApiFactory implements ApiClientInterface
{
    const KEY = 'ADD YOUR OWN api.upcdatabase.org KEY HERE';

    private $client;

    public function __construct(ContainerInterface $container)
    {
        $this->setClient($container->get('upc.client'));
    }

    /**
     * @param string $upc
     * @return array
     * @throws \Symfony\Component\Config\Definition\Exception\Exception
     */
    public function get($upc = '')
    {
        if(!$upc) {
            throw new Exception('Empty UPC given.', 403);
        }
        $client     = $this->getClient();
        $key        = $this->getApiKey();
        $request    = $client->get("{$key}/{$upc}");
        $response   = $client->send($request)->json();
        return $response;
    }

    private function setClient($client = '')
    {
        $this->client = $client;
    }

    /**
     * @return \Guzzle\Service\Client
     */
    private function getClient()
    {
        return $this->client;
    }

    /**
     * @return string
     */
    private function getApiKey()
    {
        return self::KEY;
    }

    private function setApiKey($key = '')
    {
    }

}