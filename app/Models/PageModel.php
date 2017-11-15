<?php

class PageModel
{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    // Get single post ( [0]'st element from results array)
    public function getPage($title): array
    {
            return $this->db->select("SELECT * FROM pages WHERE title = :title OR id = :id", ["title" => $title, "id" => $title])[0]; 
  
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
