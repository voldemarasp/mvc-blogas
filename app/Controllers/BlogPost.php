<?php

use uFrame\Controller;

class BlogPost extends Controller
{

    public function index()
    {
        $this->show();
    }

    public function show($id = "1")
    {
        $BlogPostModel = $this->model("BlogPostModel");
        $data['post'] = $BlogPostModel->getPost($id);
        $data['ads'] = $BlogPostModel->showAds();
        $this->view("blogpost", $data);

    }

    public function search($search = "1")
    {
        if (empty($_GET['search'])) {
            $this->index();
        } else {
            $search = $_GET['search'];
            $BlogPostModel = $this->model("BlogPostModel");
            $data['search'] = $BlogPostModel->getSearch($search);
            $data['ads'] = $BlogPostModel->showAds();
            $this->view("blogpostsearch", $data);
        }
    }

}