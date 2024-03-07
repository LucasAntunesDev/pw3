<?php
# veiculo.php
class Veiculo
{
    protected $velocidade;
    protected $rodas;
    protected $ligado;

    public function ligar() {
        $this->ligado = true;
    }

    public function desligar() {
        $this->ligado = false;
    }

    // public function isLigado(){
    //     return $this->ligado;
    // }
    public function acelerar() {
        if ($this->ligado)
            $this->velocidade += 10;
    }

    public function frear() {
        $this->velocidade -= 10;
        if ($this->velocidade < 0)
            $this->velocidade = 0;

    }

    public function getVelocidade() {
        return $this->velocidade;
    }

}