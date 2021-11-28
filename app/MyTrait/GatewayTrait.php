<?php
namespace App\MyTrait;

trait GatewayTrait {
    
    public function getPublicKey() 
    {
        return $this->publicKey;
    }

    public function getPrivateKey() 
    {
        return $this->privateKey;
    }

    public function getName() 
    {
        return $this->name;
    }

    public function getAmount() 
    {
        return $this->amount;
    }

    public function getAllInfo() 
    {
        return "GatewayClass:" . get_class() . "<br/> Public Key: " . $this->publicKey. "<br/> Private Key: ". $this->privateKey. "<br/> Name: " . $this->name. "<br/> Amount: ". $this->amount . "<br/><br/>";
    }
}