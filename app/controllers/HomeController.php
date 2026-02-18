<?php

class HomeController
{
    public function index()
    {
        $database = Database::getInstance();
        $database->getConnection();
        $data = [
            'title' => 'Home Page',
            'message' => 'Welcome to the Home Page',
        ];

        render('home/index', $data, 'layouts/hero_layout');
    }

    public function about()
    {
        $data = [
            'title' => 'About Page',
            'message' => 'Welcome to the About Page',
        ];

        render('home/about', $data);
    }
}
