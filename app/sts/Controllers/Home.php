<?php

namespace App\sts\Controllers;

if(!defined("FORBIDEN")){
    header("Location: /");
}

class Home {

    public function index()
    {
        $loadView = new \Core\ConfigView("sts/Views/home/home");
        $loadView->showViewHome();
    }
}