<?php
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