<?php
class News{
    private $id;
    private $title;
    private $content;
    private $image;
    private $created_at;
    private $category_name;

    public function __construct($id, $title, $content, $image, $created_at, $category_name)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->image = $image;
        $this->created_at = $created_at;
        $this->category_name = $category_name;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
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

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function setContent($content): void
    {
        $this->content = $content;
    }

    public function setImage($image): void
    {
        $this->image = $image;
    }

    public function setCreatedAt($created_at): void
    {
        $this->created_at = $created_at;
    }

    public function setCategoryName($category_name): void
    {
        $this->category_name = $category_name;
    }


}