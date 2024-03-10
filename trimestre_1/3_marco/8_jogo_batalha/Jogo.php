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
        $atacante = $this->personagens[$this->jogadorAtual];
        $defensor = $this->personagens[($this->jogadorAtual + 1) % count($this->personagens)];

        $atacante->atacar($defensor);
        $this->jogadorAtual = ($this->jogadorAtual + 1) % count($this->personagens);

        echo '**Turno de ' . $atacante->getNome() . '**<br>';
        echo $atacante->getNome() . ' ataca ' . $defensor->getNome() . '<br>';
        echo $defensor->getNome() . ' : Vida ' . $defensor->getVida();
        echo '<br></br>';
    }

    public function verificarVencedor() {
        for ($i = 0; $i < count($this->personagens); $i++) {
            if ($this->personagens[$i]->getVida() < 0) {
                return $this->personagens[$i] == $this->personagens[1] ? $this->personagens[0] : $this->personagens[1];
            }
        }

        foreach ($this->personagens as $personagem) {
            if ($personagem->getVida() < 0) {
                return $personagem;
            }
        }
        return null;
    }

    public function getJogadorAtual() {
        return $this->jogadorAtual;
    }
}
