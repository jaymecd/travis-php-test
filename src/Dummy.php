<?php

namespace Trial;

use GuzzleHttp\ClientInterface;
use Psr\Log\LoggerInterface;

class Dummy
{
    private $client;
    private $logger;

    public function __construct(ClientInterface $client, LoggerInterface $logger)
    {
        $this->client = $client;
        $this->logger = $logger;
    }

    function getVersion()
    {
        $version = ClientInterface::VERSION;

        return substr($version, 0, 3);
    }
}
