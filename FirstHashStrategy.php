<?php
namespace App;

require 'HashStrategy.php';

class FirstHashStrategy implements HashStrategy
{
    function createSignature($login, $secret)
    {
        return $login . '|' . $this->getHash($login, $secret);
    }

    function getHash($login, $secret)
    {
        return hash('md5', $login . $secret);
    }
}