<?php

global $pdo;
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    require '../connect.php';


    // Truy vấn thông tin người dùng
    $sql = "SELECT * FROM login WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Kiểm tra mật khẩu
        if (password_verify($password, $user['password'])) {
            // Đăng nhập thành công

            $_SESSION['loggin'] = true;

            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            if ($user['role'] == 'admin') {
                header("Location: ../admin.php");
                exit();
            } elseif ($user['role'] == 'user') {
                header("Location: ../index.php");
                exit();
            } else {
                echo "Role không hợp lệ!";
                header("Location: login.php?error=invalid_credentials");
            }
        } else {
            echo "Mật khẩu không đúng!";
            header("Location: login.php?error=invalid_credentials");
        }
    } else {
        echo "Người dùng không tồn tại!";
        header("Location: login.php?error=invalid_credentials");
    }
}

session_destroy();

