<?php

namespace App\sts\Controllers;

if(!defined("FORBIDEN")){
    header("Location: /");
}

class SignIn {

    public function index()
    {
        $loadView = new \Core\ConfigView("sts/Views/signin/signin");
        $loadView->showViewSignIn();
    }
}