<?php

namespace Trial;

use GuzzleHttp\ClientInterface;

class Dummy
{
    private $client;

    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    function getVersion()
    {
        $version = ClientInterface::VERSION;

        return substr($version, 0, 3);
    }
}
