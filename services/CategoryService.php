<?php
require_once APP_ROOT.'/models/Category.php';
class CategoryService{
    public function getAllCategories(){
        // buoc 1 ket noi database
        try {
            $conn = new PDO("mysql:host=localhost;dbname=tlunews", "root", "");
            // buoc 2 truy van du lieu
            $sql = "SELECT * FROM categories";
            $stmt = $conn->query($sql);

            // buoc 3 xu ly ket qua tra ve
            $categories = [];
            while($row = $stmt->fetch()){
                $category = new Category($row['id'], $row['NAME']);
                $categories[] = $category;
            }
            return $categories;
        } catch (PDOException $e) {
//            echo $e->getMessage();
            return $categories = [];
        }
    }
}