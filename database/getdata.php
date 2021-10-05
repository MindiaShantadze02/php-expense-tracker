<?php

require_once __DIR__.DIRECTORY_SEPARATOR.'database.php';

$statement = $pdo->prepare('SELECT * FROM expense_data');
$statement->execute();

$expenses = $statement->fetchAll(PDO::FETCH_ASSOC);