<?php
require_once APP_ROOT.'/libs/DBConnection.php';  // Kết nối cơ sở dữ liệu

class Admin extends DBConnection
{
    // Hàm xác thực người dùng
    public function authenticate($username, $password)
    {
        global $pdo;  // Sử dụng kết nối PDO toàn cục

        // Truy vấn cơ sở dữ liệu để lấy thông tin người dùng
        $sql = "SELECT * FROM users WHERE username = :username LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Kiểm tra mật khẩu
        if ($user && password_verify($password, $user['password'])) {
            return $user;  // Trả về thông tin người dùng nếu xác thực thành công
        }

        return null;  // Nếu không tìm thấy người dùng hoặc mật khẩu sai
    }
}
?>
