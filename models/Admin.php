<?php
require_once 'config/DBConnection.php';
class Admin{
    private $conn;
    private $table = 'admin';
    public function __construct($db){
        $this->conn = $db;
    }

    public function login($username, $password){
        $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
        $stmt = $this->conn->prepare($query);
        $stmt->blindParam(':username', $username);
        $stmt->execute();

        $admin = $stmt->fetch(PDO::FETCH_ASSOC);
        if($admin && password_verify($password, $admin['password'])){
            return $admin;
        }
        return false;

    }
}
