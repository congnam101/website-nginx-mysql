<?php
require 'db.php';

$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

$stmt = $pdo->prepare("INSERT INTO products (name, price, quantity) VALUES (?, ?, ?)");
$stmt->execute([$name, $price, $quantity]);

header("Location: index.php");
