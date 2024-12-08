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

    public function searchNews($keyword)
    {
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConn();

        if ($conn != null) {
            // SQL query tìm kiếm tin tức theo tiêu đề hoặc nội dung
            // Chuẩn bị câu lệnh SQL
            $sql = "SELECT * FROM news WHERE title LIKE :keyword OR content LIKE :keyword";

            // Chuẩn bị câu lệnh truy vấn
            $stmt = $conn->prepare($sql);

            // Gán giá trị cho tham số :keyword
            $stmt->bindValue(':keyword', '%' . $keyword . '%');

            // Thực thi truy vấn
            $stmt->execute();

            // Lấy tất cả các kết quả và đẩy vào mảng
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $newResults = new News($row['id'], $row['title'], $row['content'], $row['image'], $row['created_at'], $row['category_id'] );
                $newsResults[] = $newResults;
            }

            // Trả về kết quả tìm kiếm
            return $newsResults;
        }

//        return [];
    }

}