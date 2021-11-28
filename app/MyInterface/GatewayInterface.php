<?php

namespace App\MyInterface;

interface GatewayInterface
{
    public function setPublicKey($publicKey);

    public function setPrivateKey($privateKey);

    public function setName($name);

    public function setAmount($amount);

    public function getPublicKey();

    public function getPrivateKey();

    public function getName();

    public function getAmount();

    public function getAllInfo();

}
