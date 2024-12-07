<?php
require_once APP_ROOT.'/models/News.php';
class NewsService{
    public function getAllNews(){
        // buoc 1 ket noi database
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConn();
        if($conn != null) {
            // buoc 2 truy van du lieu
            $sql = "SELECT * FROM news";
            $stmt = $conn->query($sql);

            // buoc 3 xu ly ket qua tra ve
            $news = [];
            while ($row = $stmt->fetch()) {
                $new = new News($row['id'], $row['title'], $row['content'], $row['image'], $row['created_at'], $row['category_id']);
                $news[] = $new;
            }
            return $news;
        }
    }
}