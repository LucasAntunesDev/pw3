<?php
# compras_remover.php
require('inc/banco.php');

$id = $_GET['id'] ?? null;

$query = $pdo->prepare('DELETE FROM compras WHERE id = :id');
$query->bindValue(':id', $id);
$query->execute();

header('location:compras.php');