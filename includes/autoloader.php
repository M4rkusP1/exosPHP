<?php
spl_autoload_register('myAutoLoader');

function myAutoLoader($class) {
    $path = "classes/";
    $extension = ".php";
    $fullPath = $path . $class . $extension;

    if (!file_exists($fullPath)) {
        return false;
    }

    include_once $fullPath;
}