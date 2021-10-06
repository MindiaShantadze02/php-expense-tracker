<?php

require_once '../database/database.php';

$titleError = '';
$amountError = '';

$title = '';
$description = '';
$amount = '';
$date = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $title = $_POST['title'] ?? null;
    $description = $_POST['description'];
    $amount = $_POST['amount'];
    $date = date('Y-m-d H:i:s');

    if (empty($title)) {
        $titleError = 'Please enter title';
    } 
    if (empty($amount)) {
        $amountError = 'Please enter amount';
    }
    if (!$titleError && !$amountError) {
        $statement = $pdo->prepare('INSERT INTO expense_data (title, description, amount, date) 
                                    VALUES (:title, :description, :amount, :date)');
        $statement->bindValue(':title', $title);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':amount', $amount);
        $statement->bindValue(':date', $date);
        
        $statement->execute();
        
        header('Location: index.php');
    }
}
