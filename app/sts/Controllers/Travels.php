<?php

namespace App\sts\Controllers;

if(!defined("FORBIDEN")){
    header("Location: /");
}

class Travels {

    public function index()
    {
        $loadView = new \Core\ConfigView("sts/Views/travels/travels");
        $loadView->showViewTravels();
    }
}