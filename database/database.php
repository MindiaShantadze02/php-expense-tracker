<?php

$pdo = new PDO('mysql: host=localhost;dbname=expense-tracker;','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);