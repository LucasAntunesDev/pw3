<?php
//exemplo_1/classe.php

class Carro
{
    private $velocidade;

    public function acelerar(){
        $this->velocidade += 10;
    }

    public function frear(){
        $this->velocidade -= 10;
        if ($this->velocidade < 0) $this->velocidade = 0;
    }

    public function getVelocidade(){
        return $this->velocidade;
    }

}

$meu_carro = new Carro;
// var_dump($meu_carro);
$meu_carro->acelerar();
$meu_carro->acelerar();
$meu_carro->frear();
$meu_carro->frear();
$meu_carro->frear();
echo $meu_carro->getVelocidade();