<?php
# compras_form.php
require('twig_carregar.php');
require('inc/banco.php');

$id = $_GET['id'] ?? null;

$query = $pdo->prepare('SELECT * FROM compras WHERE id = :id');
$query->bindValue(':id', $id);
$query->execute();
$compra = $query->fetchAll(PDO::FETCH_ASSOC);

echo $twig->render('compras_form.html', ['compra' => $compra[0], 'titulo' => 'Editar Compras']);