<?php

namespace App\sts\Controllers;

if (!defined("FORBIDEN")) {
    header("Location: /");
}

class Search
{
    private $formData;

    public function index()
    {
        $this->formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        //var_dump($this->formData);
        /*if(empty($this->formData)){
            echo "Not defined";
        } else {
            var_dump($this->formData);
        }*/

        $loadView = new \Core\ConfigView("sts/Views/search/search");
        $loadView->showViewSearch();
    }
}
