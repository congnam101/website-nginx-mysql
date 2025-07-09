<?php
require 'db.php';

$name = $_POST['name'];
$price = $_POST['price'];

$stmt = $pdo->prepare("INSERT INTO products (name, price) VALUES (?, ?)");
$stmt->execute([$name, $price]);

header('Location: index.php');
exit;
