<?php

namespace App\Controllers;

use Core\Controller;

class HomeController extends Controller {
    public function index() {
        $this->view('home', ['title' => 'Home Page', 'content' => 'Welcome to our home page!']);
    }

    public function about() {
        $this->view('home', ['title' => 'About Us', 'content' => 'This is the about page.']);
    }
}
