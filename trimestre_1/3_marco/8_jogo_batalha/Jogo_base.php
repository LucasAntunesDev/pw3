<?php

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
        $vida = $inimigo->getVida() - $this->ataque;
        $inimigo->setVida($vida);
        // $vida -= $this->ataque;
    }

}

class Jogo
{

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
        if($this->jogadorAtual === 0) $this->jogadorAtual = 1;
        else $this->jogadorAtual = 0;
    }

    public function verificarVencedor() {
        // foreach ($this->personagens as $personagem) {
        //     if()
        // }
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

$heroi->atacar($monstro);
echo $monstro->getVida();

echo '<br>';

$monstro->atacar($heroi);
echo $heroi->getVida();

// Loop do jogo
// **while (!$vencedor) {
// **    $jogo->realizarTurno();
// **    $vencedor = $jogo->verificarVencedor();
// */ }

// Exibição do vencedor
#echo "**{$vencedor->getNome()} venceu!**<br>";