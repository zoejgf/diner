<?php

//this is my controller

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require autoload file
require_once('vendor/autoload.php');

//instantiate F3 Base class
$f3 = Base::instance();

//define a default route (328/diner)
$f3->route('GET /', function() {

    //instantiate a view
    $view = new Template();
    echo $view->render("views/diner-home.html");
});

//run fat-free
$f3->run();