<?php
require 'db.php';

$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$stock = $_POST['stock'];

$sql = "INSERT INTO products (name, price, quantity, stock) VALUES (?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $price, $quantity, $stock]);

header('Location: index.php');
