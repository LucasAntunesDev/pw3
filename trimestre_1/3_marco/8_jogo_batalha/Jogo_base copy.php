<?php

class Personagem {

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
        // Gera um número aleatório entre 1 e 100 para determinar se o ataque é crítico
        $chance = mt_rand(1, 100);
        if ($chance <= $this->getChanceCritico()) {
            $dano = ($this->getAtaque() * $this->getMultiplicadorCritico()) - $inimigo->getDefesa();
            echo "{$this->getNome()} fez um ataque crítico de $dano!<br>";
        } else {
            $dano = $this->getAtaque() - $inimigo->getDefesa();
            echo "{$this->getNome()} atacou com $dano de dano.<br>";
        }
        $inimigo->setVida($inimigo->getVida() - $dano);
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
        $atacante = $this->personagens[$this->jogadorAtual];
        $defensor = $this->personagens[($this->jogadorAtual + 1) % count($this->personagens)];
        
        $atacante->atacar($defensor);
        
        if ($defensor->getVida() <= 0) {
            echo "{$defensor->getNome()} foi derrotado!<br>";
        }
        
        $this->jogadorAtual = ($this->jogadorAtual + 1) % count($this->personagens);
    }

    public function verificarVencedor() {
        foreach ($this->personagens as $personagem) {
            if ($personagem->getVida() > 0) {
                return $personagem;
            }
        }
        return null;
    }

}

// Criação de personagens
$heroi = new Personagem("Herói", 100, 10, 5, 20, 2);
$monstro = new Personagem("Monstro", 80, 8, 3, 10, 2);

// Criação do jogo
$jogo = new Jogo([$heroi, $monstro]);
$vencedor = null;

// Início do jogo
$jogo->iniciarJogo();

// Loop do jogo
while ($vencedor === null) {
    $jogo->realizarTurno();
    echo 'oi';
    $vencedor = $jogo->verificarVencedor();
}

// Exibição do vencedor
// if ($vencedor !== null) {
//     echo "**{$vencedor->getNome()} venceu com {$vencedor->getVida() }!**<br>";
//     // echo "**{$vencedor->getNome()} venceu!**<br>";
// } else {
//     echo "O jogo terminou sem vencedores.<br>";
// }
