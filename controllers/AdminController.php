<?php
require_once 'models/Admin.php';


class AdminController{
    public function login(){
        session_start();
        $error = null;

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $username = $_POST["username"];
            $password = $_POST["password"];

            $user = new Admin();
            $user = $username->findByUsername($username);

            $username = $username->login($username, $password);
            if($user && password_verify($password, $user->password)) {
                if ($username) {
                    $_SESSION['username'] = $username;

                    if($user->role == "1") {
                        header('Location: index.php');
                    } else {
                        header('Location: index.php');
                    }
                    exit;
                } else {
                    $error = "Wrong username or password";
                }
            }else{
                $error = "Wrong username or password";
            }
            include 'views/admin/login.php';


            }
        }
        public function logout(){
        session_start();
        session_destroy();
        header('Location: /admin/login');
        }
    }




