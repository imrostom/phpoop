<?php

namespace App\Library;

use App\MyInterface\GatewayInterface;
use App\MyTrait\GatewayTrait;

class PaypalGateway implements GatewayInterface
{
    use GatewayTrait;

    private $publicKey;
    private $privateKey;
    private $name;
    private $amount;

    public function __construct($publicKey, $privateKey, $name, $amount)
    {
        $this->setPublicKey($publicKey);
        $this->setPrivateKey($privateKey);
        $this->setName($name);
        $this->setAmount($amount);
    }

    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;
    }

    public function setPrivateKey($privateKey)
    {
        $this->privateKey = $privateKey;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

}
