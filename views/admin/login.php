<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-container h3 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="login-container">
    <h3>Đăng Nhập</h3>
    <?php if (isset($error)) { ?>
        <div class="error-message">
            <?php echo $error; ?>
        </div>
    <?php } ?>

        <div class="mb-3">
            <label for="username" class="form-label">Tên tài khoản</label>
            <input type="text" class="form-control" name="username" placeholder="Username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mật khẩu</label>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        <div class="d-grid">
<!--            <a href="--><?php //= DOMAIN . '?controller=admin' ?><!--" class="login-container">DANG NHAP</a>-->
            <a href="../../views/admin/news/index.php" class="btn btn-primary">Đăng nhập</a>
        </div>
        <div class="mt-3 text-center">
        </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
