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

/*
var_dump($jogador_atual);
echo '<br>';
var_dump($inimigo);
echo '<br>';
echo $jogo->getJogadorAtual();
echo '<br>';
*/

echo '**Turno de ' . $jogador_atual->getNome(). '**<br>';
echo $jogador_atual->getNome() . ' ataca '. $inimigo->getNome() .'<br>';
$jogador_atual->atacar($inimigo);
echo $inimigo->getNome() .': Vida '. $inimigo->getVida();
$jogo->realizarTurno();

echo '<br>';


// Loop do jogo
// **while (!$vencedor) {
// **    $jogo->realizarTurno();
// **    $vencedor = $jogo->verificarVencedor();
// */ }

// Exibição do vencedor
#echo "**{$vencedor->getNome()} venceu!**<br>";