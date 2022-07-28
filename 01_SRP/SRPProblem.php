<?php

class Course
{
    private $name;
    private $category;
    private $description;

    public function connection()
    {
        return new PDO('mysql:host=localhost;dbname=srp', 'root', '');
    }

    public function createCategory()
    {
        $db = $this->connection();
        $sql = "INSERT INTO categories (name) VALUES (:name)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':name', $this->category);
        $stmt->execute();
    }

    public function createCourse()
    {
        $db = $this->connection();
        $sql = "INSERT INTO courses (name, category_id, description) VALUES (:name, :category_id, :description)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':category_id', $this->category);
        $stmt->bindParam(':description', $this->description);
        $stmt->execute();
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getDescription()
    {
        return $this->description;
    }
}