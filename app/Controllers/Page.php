<?php

use uFrame\Controller;

class Page extends Controller
{

    public function index()
    {
        $this->show();
    }

    public function show($page_name = "Home")
    {

        // Should we need some data from the database..

        $PageModel = $this->model("PageModel");
        $data = $PageModel->getPage($page_name);
        $data['ads'] = $PageModel->showAds();
        $this->view("page", $data);

        // $data['header'] = "Hello World";
        // $data['body'] = "Be nice - say Hi!";
        // $this->view("page", $data);
    }

}
