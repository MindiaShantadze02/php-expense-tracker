<?php

require_once '../database/database.php';

$id = $_POST['id'];

if (!$id) {
    header('Location: index.php');
    exit;
}

$statement = $pdo->prepare('DELETE FROM expense_data WHERE id = :id');
$statement->bindValue(':id',$id);
$statement->execute();

header('Location: index.php');