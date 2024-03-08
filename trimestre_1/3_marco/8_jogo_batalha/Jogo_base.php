<?php

class Personagem {

    private $nome;
    private $vida;
    private $ataque;
    private $defesa;
    private $chanceCritico;
    private $multiplicadorCritico;

    public function __construct($nome, $vida, $ataque, $defesa, $chanceCritico, $multiplicadorCritico) {
        // ...
    }

    public function getNome() {
        // ...
    }

    public function getVida() {
        // ...
    }

    public function setVida($vida) {
        // ...
    }

    public function getAtaque() {
        // ...
    }

    public function getDefesa() {
        // ...
    }
    public function getChanceCritico() {
        // ...
    }

    public function getMultiplicadorCritico() {
        // ...
    }

    public function atacar($inimigo) {
        // ...
    }

}

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
        // ...
    }

    public function verificarVencedor() {
        // ...
    }

}

// Criação de personagens
$heroi = new Personagem("Herói", 100, 10, 5, 20, 10);
$monstro = new Personagem("Monstro", 80, 8, 3, 10, 15);

// Criação do jogo
$jogo = new Jogo([$heroi, $monstro]);
$vencedor = null;

// Início do jogo
$jogo->iniciarJogo();

// Loop do jogo
while (!$vencedor) {
    $jogo->realizarTurno();
    $vencedor = $jogo->verificarVencedor();
}

// Exibição do vencedor
echo "**{$vencedor->getNome()} venceu!**<br>";