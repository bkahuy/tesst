<?php
require_once __DIR__.'/../models/Admin.php';
require_once __DIR__.'/../views/index.php';

class AdminController {
    private $userModel;

    public function __construct() {
        $this->userModel = new Admin();
    }

    // Hiển thị form đăng ký
//    public function registerForm() {
//        require_once APP_ROOT . '/views/admin/register.php';
//    }
//
//    // Xử lý đăng ký
//    public function register() {
//        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//            $username = $_POST['username'];
//            $password = $_POST['password'];
//            $role = $_POST['role'];
//
//            $result = $this->userModel->register($username, $password, $role);
//
//            if ($result) {
//                header("Location: " . DOMAIN . "index.php?controller=user&action=loginForm");
//            } else {
//                echo "Đăng ký thất bại!";
//            }
//        }
//    }

    // Hiển thị form đăng nhập
    public function loginForm() {
        include __DIR__.'/../views/admin/login.php';
    }

    // Xử lý đăng nhập
    public function login(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['signIn']) && $_POST['signIn'] === 'login') {
                if (isset($_POST['username'], $_POST['password'])) {

                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    echo $username;
                    // Gọi phương thức login để kiểm tra thông tin người dùng
                    $result = User::login($username, $password);

                    if ($result) {
                        // Đăng nhập thành công, lưu thông tin người dùng vào session
                        session_start();
                        $_SESSION['user'] = $result['username']; // Lưu thông tin người dùng vào session

                        // Kiểm tra quyền của người dùng
                        if ($result['role'] == 1) {
                            echo 'Quản trị viên';// Quản trị viên
                            header("Location: index.php?controller=user&action=index");
                        } else {
                            echo header("khách");
                            header("Location: index.php?controller=home&action=index");
                        }
                    } else {
                        echo "Đăng nhập thất bại!";
                    }
                }
            }
        }
    }
}
?>
