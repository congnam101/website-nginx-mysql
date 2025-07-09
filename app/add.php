<?php
require 'db.php';

$name = $_POST['name'] ?? '';
$price = $_POST['price'] ?? 0;

if ($name && $price) {
    $stmt = $pdo->prepare("INSERT INTO products (name, price) VALUES (?, ?)");
    $stmt->execute([$name, $price]);
}

header("Location: index.php");
