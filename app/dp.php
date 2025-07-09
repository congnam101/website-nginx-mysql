<?php
$host = 'db';
$dbname = 'web';
$user = 'root';
$pass = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
} catch (PDOException $e) {
    die("Lỗi kết nối DB: " . $e->getMessage());
}
?>
