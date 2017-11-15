<?php

class BlogPostModel
{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getPost(int $id): array
    {
        return $this->db->select("SELECT * FROM posts WHERE id = :id", ["id" => $id])[0];
    }

    public function showAds(): array
    {
        $rand = rand(0,2);
        return $this->db->select("SELECT * FROM ads")[$rand];
    }

    public function getSearch(string $search): array
    {
        // return $this->db->select("SELECT * FROM posts WHERE title LIKE '%{$search}%' OR content LIKE '%{$search}%'");
        return $this->db->select("SELECT * FROM posts WHERE title LIKE ? OR content LIKE ?", ["%$search%", "%$search%"]);
    }

}