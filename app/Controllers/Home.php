<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home'); // loads app/Views/home.php
    }

    public function about()
    {
        return view('about'); // loads app/Views/about.php
    }

    public function contact()
    {
        return view('contact'); // loads app/Views/contact.php
    }
}
