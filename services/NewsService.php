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
                $new = new News($row['id'], $row['title'], $row['content'], $row['image'], $row['created_at'], $row['category_id'] );
                $news[] = $new;
            }
            return $news;
        }
    }
    public function getNewsById($id){
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConn();
        if($conn != null) {
            $sql = "SELECT news.*, categories.name AS category_name 
                    FROM news 
                    INNER JOIN categories 
                    ON news.category_id = categories.id
                    WHERE news.id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $newsbyid = [];
            while ($row = $stmt->fetch()) {
                $newbyid = new News($row['id'], $row['title'], $row['content'], $row['image'], $row['created_at'], $row['category_name']);
                $newsbyid[] = $newbyid;
            }
            return $newsbyid;
        }
    }

    public function getNewsByCateId($id){
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConn();
        if($conn != null) {
            $sql = "SELECT news.*, categories.name AS category_name 
                    FROM news 
                    INNER JOIN categories 
                    ON news.category_id = categories.id
                    WHERE news.category_id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $newsbyid = [];
            while ($row = $stmt->fetch()) {
                $newbyid = new News($row['id'], $row['title'], $row['content'], $row['image'], $row['created_at'], $row['category_name']);
                $newsbyid[] = $newbyid;
            }
            return $newsbyid;
        }
    }
}