<?php
namespace App;

interface HashStrategy
{
    function createSignature($login, $secret);

    function getHash($login, $secret);
}