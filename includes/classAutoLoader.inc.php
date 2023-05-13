<?php

spl_autoload_register('classAutoLoader');
function classAutoLoader($className){
    $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    if (strpos($url, 'includes') || strpos($url, 'handlers') == true) {
        $path = "../classes/";
    }
    else{
        $path = "classes/";
    }
    $extension = ".php" ;

    include $path . $className . $extension;
}