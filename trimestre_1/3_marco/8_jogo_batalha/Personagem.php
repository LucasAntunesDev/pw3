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
        $chance = mt_rand(1, 100);
        if ($chance <= $this->getChanceCritico()) {
            $dano = ($this->getAtaque() * $this->getMultiplicadorCritico()) - $inimigo->getDefesa();
            echo "{$this->getNome()} fez um ataque crítico de $dano!<br>";
        } else {
            $dano = $this->getAtaque() - $inimigo->getDefesa();
            echo "{$this->getNome()} atacou com $dano de dano.<br>";
        }
        $inimigo->setVida($inimigo->getVida() - $dano);
        return;
        $defesa = $inimigo->getDefesa();
        $rand = rand(1, 100);
        $critico = $rand <= $this->chanceCritico;
        $critico = 60;

        $calculo_dano = !$critico ? $this->ataque - $defesa : 
        ($this->ataque * $this->multiplicadorCritico) - $defesa;
        echo $critico ? 'critico' : '';
        // echo $rand . '<br>';
        
        $vida = $inimigo->getVida() - $calculo_dano;
        // echo 'Vida: '. $vida . '<br>';
        $inimigo->setVida($vida);
    }

}