<?php
# compras_form.php
require('twig_carregar.php');
require('inc/banco.php');

$dados = $pdo->query('SELECT * FROM compras WHERE id = ' . $_GET['id']);

$compra = $dados->fetchAll(PDO::FETCH_ASSOC);

var_dump($compra[0]['id']);

echo $twig->render('compras_form.html', ['compra' => $compra[0], 'titulo' => 'Editar Compras']);