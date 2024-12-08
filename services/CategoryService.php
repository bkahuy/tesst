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
            $categories = [];
            while ($row = $stmt->fetch()) {
                $category = new Category($row['id'], $row['NAME']);
                $categories[] = $category;
            }
            return $categories;
        }

        // Truy vấn dữ liệu với JOIN
        $sql = "SELECT news.*, categories.name AS category_name 
        FROM news 
        INNER JOIN categories ON news.category_id = categories.id";

        $result = $db->query($sql);
        $news = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_object()) {
                $news[] = $row;
            }
        }


    }
}
