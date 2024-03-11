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
            echo "{$personagem->getNome()}: Vida {$personagem->getVida()}<br></br>";
        }
    }

    public function realizarTurno() {
        $atacante = $this->personagens[$this->jogadorAtual];
        $defensor = $this->personagens[($this->jogadorAtual + 1) % count($this->personagens)];
        
        echo "**Turno de {$atacante->getNome()} **<br>";
        echo "{$atacante->getNome()} ataca {$defensor->getNome()} <br>";
        $atacante->atacar($defensor);
        
        $this->jogadorAtual = ($this->jogadorAtual + 1) % count($this->personagens);
        echo "{$defensor->getNome()} : Vida {$defensor->getVida()}<br></br>";
    }

    public function verificarVencedor() {
        foreach ($this->personagens as $personagem)
            if ($personagem->getVida() < 0) return $this->personagens[0] == $personagem ? $this->personagens[1]
                :
                $this->personagens[0];
        return null;
    }

    public function getJogadorAtual() {
        return $this->jogadorAtual;
    }
}
