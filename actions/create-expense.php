<?php

require_once '../database/database.php';

$statement = $pdo->prepare('INSERT INTO expense_data (title, description, amount, date) 
                            VALUES (:title, :description, :amount, :date)');