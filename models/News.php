<?php
class News{
    private $id;
    private $title;
    private $content;
    private $image;
    private $created_at;
    private $category_name;
    private $category_id;

    public function __construct($id, $title, $content, $image, $created_at, $category_id)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->image = $image;
        $this->created_at = $created_at;
        $this->category_id = $category_id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function getCategoryName()
    {
        return $this->category_name;
    }

    public function getCategoryId()
    {
        return $this->category_id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function setImage($image): void
    {
        $this->image = $image;
    }

    public function setContent($content): void
    {
        $this->content = $content;
    }

    public function setCreatedAt($created_at): void
    {
        $this->created_at = $created_at;
    }

    public function setCategoryName($category_name): void
    {
        $this->category_name = $category_name;
    }

    public function setCategoryId($category_id): void
    {
        $this->category_id = $category_id;
    }

    public function searchNews($keyword)
    {
        $sql = "SELECT * FROM news WHERE title LIKE :keyword OR content LIKE :keyword";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['keyword' => '%' . $keyword . '%']);
        return $stmt->fetchAll();
    }

}