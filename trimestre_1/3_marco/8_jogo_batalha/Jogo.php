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
        // var_dump($this->personagens);
        // $this->jogadorAtual = !$this->jogadorAtual;

        $atacante = $this->personagens[$this->jogadorAtual];
        $defensor = $this->personagens[($this->jogadorAtual + 1) % count($this->personagens)];

        $atacante->atacar($defensor);


        // if ($this->jogadorAtual === 0)
        //     $this->jogadorAtual = 1;
        // else
        //     $this->jogadorAtual = 0;
        $this->jogadorAtual = ($this->jogadorAtual + 1) % count($this->personagens);
        // var_dump($this->jogadorAtual);

        echo '**Turno de ' . $atacante->getNome() . '**<br>';
        echo $atacante->getNome() . ' ataca ' . $defensor->getNome() . '<br>';
        // echo $atacante->getNome() .' : Vida '. $atacante->getVida();
        // echo '<br>';
        echo $defensor->getNome() . ' : Vida ' . $defensor->getVida();
        echo '<br>';
        echo '<br>';
    }

    public function verificarVencedor() {
        // var_dump($this->jogadorAtual = ($this->jogadorAtual + 1) % count($this->personagens));
        // if ( $this->personagens[$this->jogadorAtual] > 0 || $this->jogadorAtual = ($this->jogadorAtual + 1) % count($this->personagens)>0) return null;
        // return;
        // echo count($this->personagens);
        for ($i = 0; $i < count($this->personagens); $i++) {
            if ($this->personagens[$i]->getVida() < 0) {
                return $this->personagens[$i] == $this->personagens[1] ? $this->personagens[0] : $this->personagens[1];
            }
        }

        foreach ($this->personagens as $personagem) {
            echo "{$personagem->getNome()} <br>";
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
