<?php
require 'db.php';

$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Quản lý sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="text-center mb-4">🛒 Quản lý sản phẩm</h2>

    <form method="POST" action="add.php" class="row g-3 mb-4">
        <div class="col-md-3">
            <input type="text" name="name" class="form-control" placeholder="Tên sản phẩm" required>
        </div>
        <div class="col-md-2">
            <input type="number" name="price" class="form-control" placeholder="Giá (đ)" required>
        </div>
        <div class="col-md-2">
            <input type="number" name="quantity" class="form-control" placeholder="Số lượng" required>
        </div>
        <div class="col-md-3">
            <input type="number" name="stock" class="form-control" placeholder="Hàng tồn kho" required>
        </div>
        <div class="col-md-2 d-grid">
            <button type="submit" class="btn btn-success">➕ Thêm sản phẩm</button>
        </div>
    </form>

    <table class="table table-bordered table-striped bg-white">
        <thead class="table-dark text-center">
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Hàng tồn kho</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $p): ?>
            <tr class="align-middle">
                <td class="text-center"><?= $p['id'] ?></td>
                <td><?= htmlspecialchars($p['name']) ?></td>
                <td class="text-end"><?= number_format($p['price']) ?> đ</td>
                <td class="text-center"><?= $p['quantity'] ?? 0 ?></td>
                <td class="text-center"><?= $p['stock'] ?? 0 ?></td>
                <td class="text-center">
                    <a href="delete.php?id=<?= $p['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc muốn xóa?')">❌</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
