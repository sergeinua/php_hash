<?php
namespace App;

class Client
{
    public $firstClient;
    public $secondClient;
    public $firstResult;
    public $secondResult;

    function __construct()
    {
        $this->firstClient = new Context(new FirstHashStrategy());
        $this->secondClient = new Context(new SecondHashStrategy());
    }

    function test($username, $secret)
    {
        $this->firstResult = $this->firstClient->execute($username, $secret);
        $this->secondResult = $this->secondClient->execute($username, $secret);
    }
}

