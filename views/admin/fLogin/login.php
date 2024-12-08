<?php
session_start();

// Hiển thị thông báo lỗi nếu có
$error_message = '';
if (isset($_GET['error'])) {
    switch ($_GET['error']) {
        case 'invalid_credentials':
            $error_message = 'Tên đăng nhập hoặc mật khẩu không chính xác!';
            break;
        case 'invalid_role':
            $error_message = 'Tài khoản không có quyền truy cập!';
            break;
        default:
            $error_message = 'Đã xảy ra lỗi, vui lòng thử lại.';
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>
<h1>Đăng nhập</h1>

<!-- Hiển thị thông báo lỗi -->
<?php if (!empty($error_message)): ?>
    <p style="color: red;"><?php echo htmlspecialchars($error_message); ?></p>
<?php endif; ?>

<form method="POST" action="login-submit.php">
    <label for="username">Tên đăng nhập:</label>
    <input type="text" name="username" id="username" required>
    <br>
    <label for="password">Mật khẩu:</label>
    <input type="password" name="password" id="password" required>
    <br>
    <button type="submit">Đăng nhập</button><br>

</form>
<button type="button" onclick="location.href='../signin/signin.php';">Đăng kí</button>
</body>
</html>
