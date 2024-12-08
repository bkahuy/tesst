<?php
session_start();
if(!isset($_SESSION['admin'])){
    header('location: login.php');
    exit();
}
$admin = $_SESSION['admin'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản trị</title>
</head>
<body>
<h1>Chào mừng, <?= htmlspecialchars($admin['username']) ?></h1>
<a href="logout.php">Đăng xuất</a>
</body>
</html>
