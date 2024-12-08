<?php
require_once APP_ROOT.'/models/Category.php';
class CategoryService{
    public function getAllCategories(){
        // buoc 1 ket noi database
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConn();
        if($conn != null) {
            // buoc 2 truy van du lieu
            $sql = "SELECT * FROM categories";
            $stmt = $conn->query($sql);

            // buoc 3 xu ly ket qua tra ve
            if ($stmt->rowCount() > 0) {
                $categories = [];
                while ($row = $stmt->fetch()) {
                    $category = new Category($row['id'], $row['NAME']);
                    $categories[] = $category;
                }
                return $categories;
            }
        }
    }
    public function getCategoryById($id){
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConn();
        if($conn != null) {
            $sql = "SELECT * FROM categories WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                $categoriesbyid = [];
                while ($row = $stmt->fetch()) {
                    $categorybyid = new Category($row['id'], $row['name']);
                    $categoriesbyid[] = $categorybyid;
                }
                return $categoriesbyid;
            } else {
                return [];
            }
        }
    }

}
