<?php

namespace App\sts\Controllers;

if(!defined("FORBIDEN")){
    header("Location: /");
}

class Seat {

    public function index()
    {
        $loadView = new \Core\ConfigView("sts/Views/seat/seat");
        $loadView->showViewSeat();
    }
}