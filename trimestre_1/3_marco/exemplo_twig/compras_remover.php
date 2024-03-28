<?php
# compras_remove.php
require('inc/banco.php');
$item = $_POST['item'] ?? null;

if ($item) {
    $query = $pdo->prepare('DELETE FROM compras WHERE id = :id');
    $query->bindValue(':id', $id);

    $query->execute();
}

header('location:compras.php');