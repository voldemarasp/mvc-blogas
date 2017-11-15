<?php

class BlogModel
{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllPosts(): array
    {
        return $this->db->select("SELECT * FROM posts");
    }

    public function getPageById(string $id): array
    {
        return $this->db->select("SELECT * FROM posts WHERE id = :id", ["id" => $id])[0];
    }

    // Get all posts
    public function allPosts(): array
    {
        return $this->db->select("SELECT * FROM posts");
    }

    public function showAds(): array
    {
        $rand = rand(0,2);
        return $this->db->select("SELECT * FROM ads")[$rand];
    }

}
