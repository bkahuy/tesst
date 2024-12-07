<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Đăng nhập</title>
</head>
<body>
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg p-4" style="width: 100%; max-width: 400px;">
        <h3 class="text-center mb-4">Đăng nhập</h3>
        <form>
            <div class="mb-3">
                <label for="text" class="form-label">Tên tài khoản</label>
                <input type="text" class="form-control" id="email" placeholder="Nhập tên tài khoản" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Log In</button>
            </div>
        </form>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

