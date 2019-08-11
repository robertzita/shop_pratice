<?php

define("BP",__DIR__ . DIRECTORY_SEPARATOR );

//error_reporting(E_ALL);
error_reporting(E_ERROR);
ini_set("display_errors",1);

$t = implode(PATH_SEPARATOR,[
    BP . "app" . DIRECTORY_SEPARATOR . "model",
    BP . "app" . DIRECTORY_SEPARATOR . "controller",

]
);


set_include_path($t);
spl_autoload_register(function($class)
{
    $p = strtr($class,"\\",DIRECTORY_SEPARATOR) . ".php";
    return include $p;



});

App::start();