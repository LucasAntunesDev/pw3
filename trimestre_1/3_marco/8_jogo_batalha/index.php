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

// Loop do jogo
while (!$vencedor) {
    $jogo->realizarTurno();
    $vencedor = $jogo->verificarVencedor();
}

// Exibição do vencedor
echo "**{$vencedor->getNome()} venceu!**<br>";