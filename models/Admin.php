<?php


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

class Admin{
    private $username;
    private $password;
    private $role;
    public function __construct($username, $password, $role){
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getRole(){
        return $this->role;
    }

    public function setUsername($username): void
    {
        $this->username = $username;
    }

    public function setPassword($password): void
    {
        $this->password = $password;
    }

    public function setRole($role): void
    {
        $this->role = $role;
    }

}
