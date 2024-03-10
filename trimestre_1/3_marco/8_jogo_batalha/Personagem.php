<?php
# Personagem.php

class Personagem
{

    private $nome;
    private $vida;
    private $ataque;
    private $defesa;
    private $chanceCritico;
    private $multiplicadorCritico;

    public function __construct($nome, $vida, $ataque, $defesa, $chanceCritico, $multiplicadorCritico) {
        $this->nome = $nome;
        $this->vida = $vida;
        $this->ataque = $ataque;
        $this->defesa = $defesa;
        $this->chanceCritico = $chanceCritico;
        $this->multiplicadorCritico = $multiplicadorCritico;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getVida() {
        return $this->vida;
    }

    public function setVida($vida) {
        $this->vida = $vida;
    }

    public function getAtaque() {
        return $this->ataque;
    }

    public function getDefesa() {
        return $this->defesa;
    }
    public function getChanceCritico() {
        return $this->chanceCritico;
    }

    public function getMultiplicadorCritico() {
        return $this->multiplicadorCritico;
    }

    public function atacar($inimigo) {
        $defesa = $inimigo->getDefesa();
        $rand = rand(1, 100);
        $critico = $rand <= $this->chanceCritico;

        $calculo_dano = !$critico ? $this->ataque - $defesa : 
        ($this->ataque * $this->multiplicadorCritico) - $defesa;
        echo $critico ? '**Ataque Crítico!**<br>' : '';
        
        $vida = $inimigo->getVida() - $calculo_dano;
        $inimigo->setVida($vida);
    }

}