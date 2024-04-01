<?php
# compras_editar.php
require('twig_carregar.php');
require('inc/banco.php');

$id = $_GET['id'] ?? null;

$sql = $pdo->prepare('SELECT * FROM compras WHERE id = :id');
$sql->bindValue(':id', $id);
$sql->execute();
$compra = $sql->fetch(PDO::FETCH_ASSOC);

echo $twig->render('compras_editar.html', ['compra' => $compra, 'titulo' => 'Editar Compras']);