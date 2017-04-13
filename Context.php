<?php
namespace App;

class Context
{
    private $hashingStrategy;

    function __construct(HashStrategy $strategy)
    {
        $this->hashingStrategy = $strategy;
    }

    function execute($username, $secret)
    {
        $hash = $this->hashingStrategy->createSignature($username, $secret);

        return $hash;
    }
}