<?php
# compras_remove.php
require('inc/banco.php');
$item = $_POST['item'] ?? null;

if ($item) {
    $query = $pdo->prepare('UPDATE compras SET nome = :nome');
    $query->bindValue(':id', $id);

    $query->execute();
}

header('location:compras.php');