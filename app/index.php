<?php
require 'db.php';

$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản lý sản phẩm</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>🛍️ Quản lý sản phẩm</h1>
        <form method="POST" action="add.php" class="form-add">
            <input type="text" name="name" placeholder="Tên sản phẩm" required>
            <input type="number" name="price" placeholder="Hàng tồn kho" required>
            <input type="number" name="quantity" placeholder="Số lượng" required>
            <button type="submit">➕ Thêm</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Hàng tồn kho</th>
                    <th>Số lượng</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $p): ?>
                <tr>
                    <td><?= $p['id'] ?></td>
                    <td><?= htmlspecialchars($p['name']) ?></td>
                    <td><?= $p['price'] ?></td>
                    <td><?= $p['quantity'] ?></td>
                    <td><a href="delete.php?id=<?= $p['id'] ?>" class="btn-delete" onclick="return confirm('Bạn chắc chắn muốn xóa?')">❌</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
