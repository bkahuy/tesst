<?php
require_once APP_ROOT . '/models/Admin.php';

class AdminController {
    private $userModel;

    public function __construct() {
        $this->userModel = new Admin();
    }

    // Hiển thị form đăng ký
    public function registerForm() {
        require_once APP_ROOT . '/views/admin/register.php';
    }

    // Xử lý đăng ký
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $role = $_POST['role'];

            $result = $this->userModel->register($username, $password, $role);

            if ($result) {
                header("Location: " . DOMAIN . "index.php?controller=user&action=loginForm");
            } else {
                echo "Đăng ký thất bại!";
            }
        }
    }

    // Hiển thị form đăng nhập
    public function loginForm() {
        require_once APP_ROOT . '/views/admin/login.php';
    }

    // Xử lý đăng nhập
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = $this->userModel->login($username, $password);

            if ($user) {
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];

                if ($user['role'] == 1) {
                    header("Location: " . DOMAIN . "index.php?controller=admin&action=index"); // Admin Dashboard
                } else {
                    header("Location: " . DOMAIN . "index.php?controller=home&action=index"); // User Home
                }
            } else {
                echo "Đăng nhập thất bại!";
            }
        }
    }
}
?>
