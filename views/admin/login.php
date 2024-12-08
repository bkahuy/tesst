<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="<?php echo DOMAIN . 'index.php?controller=user&action=login'; ?>">
    <div class="mb-3">
        <label for="username" class="form-label">Tên tài khoản</label>
        <input type="text" class="form-control" name="username" placeholder="Username" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Mật khẩu</label>
        <input type="password" class="form-control" name="password" placeholder="Password" required>
    </div>
    <div class="d-grid">
        <button class="btn btn-primary" type="submit">Đăng nhập</button>
    </div>
</form>


</body>
</html>