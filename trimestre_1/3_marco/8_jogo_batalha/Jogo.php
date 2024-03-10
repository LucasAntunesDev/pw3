<?php
# Jogo.php

class Jogo {

    private $personagens;
    private $jogadorAtual;

    public function __construct($personagens) {
        $this->personagens = $personagens;
        $this->jogadorAtual = 0;
    }

    public function iniciarJogo() {
        echo "**Início do Jogo!**<br>";

        foreach ($this->personagens as $personagem) {
            echo "{$personagem->getNome()}: Vida {$personagem->getVida()}<br>";
        }

        echo "<br>";
    }

    public function realizarTurno() {
        if ($this->jogadorAtual === 0)
            $this->jogadorAtual = 1;
        else
            $this->jogadorAtual = 0;
    }

    public function verificarVencedor($jogadorAtual) {
        if (!$jogadorAtual->getVida() <= 0) return;
        return false;
    }

    public function getJogadorAtual() {
        return $this->jogadorAtual;
    }
}
