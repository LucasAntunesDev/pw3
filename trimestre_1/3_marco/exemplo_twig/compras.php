<?php
# compras.php
require('twig_carregar.php');
require('inc/banco.php');

$dados = $pdo->query('SELECT * FROM compras');

$compras = $dados->fetchAll(PDO::FETCH_ASSOC);

echo $twig->render('compras.html', ['compras' => $compras, 'titulo' => 'Compras']);