<?php
class DBConnection{
    private $host;
    private $user;
    private $pass;
    private $dbname;
    private $conn;

    public function __construct()
    {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->dbname = 'tlunews';

        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->user, $this->pass);
        }catch(PDOException $e){
            $this -> conn = null;
        }
    }

    public function getConn(){

        return $this->conn;
    }


}