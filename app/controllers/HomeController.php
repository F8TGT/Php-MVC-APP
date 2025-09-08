<?php

class HomeController
{
    public function index()
    {
        $message = "some message";
        require_once __DIR__."/../views/home/index.php";
    }
}
