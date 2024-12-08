<?php
require_once APP_ROOT.'/models/Admin.php';
class AdminService{
    public function getAllAdmins(){
        // buoc 1 ket noi database
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConn();
        if($conn != null) {
            // buoc 2 truy van du lieu
            $sql = "SELECT * FROM users";
            $stmt = $conn->query($sql);

            // buoc 3 xu ly ket qua tra ve
            $users = [];
            while ($row = $stmt->fetch()) {
                $user = new Admin($row['username'], $row['PASSWORD'], $row['role']);
                $users[] = $user;
            }
            return $users;
        }
    }
}