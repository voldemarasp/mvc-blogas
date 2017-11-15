<?php

use uFrame\Controller;

class Blog extends Controller
{

    public function index()
    {
        $this->show();
    }

    public function show($page_name = "Home")
    {

        $BlogModel = $this->model("BlogModel");
        $data['postList'] = $BlogModel->getAllPosts();
        $data['ads'] = $BlogModel->showAds();
        $this->view("blog", $data);

    }

}