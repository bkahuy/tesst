<?php
require_once APP_ROOT.'/libs/DBConnection.php';  // Kết nối cơ sở dữ liệu

class Admin extends DBConnection
{
    // Hàm xác thực người dùng
    public static function login($username, $password) {
        $database = new Database();
        $conn = $database->getConnection();

        // Truy vấn người dùng theo tên đăng nhập
        $stmt = $conn->prepare('SELECT * FROM users WHERE username = :username');
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Nếu có kết quả và mật khẩu trùng khớp
        if ($result && $password === $result['password']) {
            return $result;
        }
        return false;
    }
}
?>
