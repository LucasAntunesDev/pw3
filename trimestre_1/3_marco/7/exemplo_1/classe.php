<?php
//exemplo_1/classe.php

class Carro
{
    private $velocidade;

    public function acelerar($velocidade){
        $velocidade++;
    }

    public function frear($velocidade){
        $velocidade--;
    }

    public function getVelocidade(){
        return $this->velocidade;
    }

}