<?php

require_once('Personagem.php');
require_once('Jogo.php');

// Criação de personagens
$heroi = new Personagem("Herói", 100, 10, 5, 20, 10);
$monstro = new Personagem("Monstro", 80, 8, 3, 10, 15);

// Criação do jogo
$jogo = new Jogo([$heroi, $monstro]);
$vencedor = null;



// Início do jogo
$jogo->iniciarJogo();
$jogador_atual = $jogo->getJogadorAtual() ? $monstro : $heroi;
$inimigo = !$jogo->getJogadorAtual() ?  $monstro : $heroi;


// Loop do jogo
echo "vencedor var_dump: ";
var_dump($vencedor);
echo "<br>";
while (!$vencedor) {
    $jogo->realizarTurno();
    // $jogo->realizarTurno();
    $vencedor = $jogo->verificarVencedor();
    echo "vencedor var_dump: ";
    var_dump($vencedor);
    echo "<br>";
}

echo '<br>';

// Exibição do vencedor
if ($vencedor !== null) {
    echo "**{$vencedor->getNome()} venceu com {$vencedor->getVida() }!**<br>";
    // echo "**{$vencedor->getNome()} venceu!**<br>";
} else {
    echo "O jogo terminou sem vencedores.<br>";
}