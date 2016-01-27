<?php

namespace Trial\Test;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Monolog\Logger;
use Trial\Dummy;

class Dummy6Test extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $version = (string) ClientInterface::VERSION;

        if ($version[0] !== '6') {
            $this->markTestSkipped('Intended for Guzzle 6 only');
        }
    }

    function testVersion5()
    {
        $sut = new Dummy(new Client(), new Logger('x'));

        $this->assertSame('6.1', $sut->getVersion());
    }
}
