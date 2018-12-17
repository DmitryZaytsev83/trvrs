<?php
//Load Config
require_once "config/config.php";
// Load libraries
//require_once "libraries/core.php";
//require_once "libraries/controller.php";
//require_once "libraries/database.php";

//Autoload libraries
spl_autoload_register(function ($className) {
    require_once 'libraries/' . $className . '.php';
});
/**
 * Created by PhpStorm.
 * User: Dmitr
 * Date: 17.12.2018
 * Time: 16:50
 */