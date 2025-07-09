<?php
require 'db.php';

$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Quản lý sản phẩm</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Danh sách sản phẩm</h1>
    <form method="POST" action="add.php">
        <input type="text" name="name" placeholder="Tên sản phẩm" required>
        <input type="number" name="price" placeholder="Giá" required>
        <button type="submit">Thêm</button>
    </form>

    <table>
        <tr><th>ID</th><th>Tên</th><th>Giá</th><th>Xóa</th></tr>
        <?php foreach ($products as $p): ?>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= htmlspecialchars($p['name']) ?></td>
            <td><?= $p['price'] ?></td>
            <td><a href="delete.php?id=<?= $p['id'] ?>" onclick="return confirm('Xóa?')">❌</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
