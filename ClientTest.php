<?php
namespace App;

use PHPUnit\Framework\TestCase;

require 'Client.php';
require 'Context.php';
require 'FirstHashStrategy.php';
require 'SecondHashStrategy.php';

class ClientTest extends TestCase
{
    protected $client;

    function testSecret()
    {
        $this->client = new Client();
        $this->client->test('username1', 'secret1');

        $this->assertEquals(
            $this->client->firstResult,
            'username1|d57f06dadcff87a8e9d73a691bf3cee7'
        );
        $this->assertEquals(
            $this->client->secondResult,
            'username1|f04384f78e66a5ad408ffdf56af54523977fa871338caa6323a1fed559e8e904'
        );
    }
}