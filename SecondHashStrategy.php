<?php
namespace App;

class SecondHashStrategy implements HashStrategy
{
    function createSignature($login, $secret)
    {
        return $login . '|' . $this->getHash($login, $secret);
    }

    function getHash($login, $secret)
    {
        return hash('sha256',$login . $secret);
    }
}