<?php
// fruta.php
require('twig_carregar.php');

$frutas = [
    'Abacaxi 🍍',
    'Laranja 🍊',
    'Banana 🍌',
    'Maçã 🍎',
    'Uva 🍇',
    'Bergamota 🍊',
    'Melancia 🍉',
];

// Ou o valor de $_GET['fruta] ou null (caso não exista a variável ou o valor)
$frutaEscolhida = $_GET['fruta'] ?? null;

echo $twig->render('fruta.html', [
    'frutas' => $frutas,
    // Ou o resultado de $frutas[indice] ou null (caso não exista o índice ou tenha vindo com um índice nulo)
    'frutaEscolhida' => $frutas[$frutaEscolhida] ?? null,
    'titulo' => 'Frutas'
]);