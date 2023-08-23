<?php

namespace Core;

if(!defined("FORBIDEN")){
    header("Location: /");
}

//THIS CLASS IS RESPONSABLE TO CALL ALL CONTROLLER
class ConfigController
{
    private string $url;

    public function __construct()
    {
        if(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)){
            $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
        }else {
            $this->url = "home";
        }
    }

    //Fuction that verify if the url given have the correspondent class then call him.
    public function controllerLoad()
    {
        $this->Config();

        $existPage = new \Core\Pages();
        $existPage->publicPage($this->url);

        $urlUpper = ucwords($this->url);
        $class = "\\App\\sts\\Controllers\\" . $urlUpper;
        $classLoad = new $class;
        $classLoad->index();
    }

    public function Config()
    {
        //define("URL", "http://weticket.co.mz/");
        define("URL", "http://localhost/TCC-Project/");
    }
}
