<?php

namespace App\controllers;

use App\core\Controller;

class Admin extends Controller{
    public function index(){
        $this->view->generate('home.php', 'main.php');
    }
}
