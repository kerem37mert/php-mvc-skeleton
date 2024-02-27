<?php

require_once "app/models/HomeModel.php";

class HomeController
{
    public HomeModel $homeModel;

    public function index(): void
    {
        $this->homeModel = new HomeModel();


        $data = $this->getContent();
        require_once "app/views/home.php";
    }

    public function getContent(): string
    {
        return $this->homeModel->content();
    }
}