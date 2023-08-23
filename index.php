<?php

session_start();

define("FORBIDEN", true);

require_once './vendor/autoload.php';

$url = new \Core\ConfigController;
$url->controllerLoad();