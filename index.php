<?php
/**
 *  µFrame is a basic PHP MVC framework
 *  Created by Ignas Galuškinas 2017
 */

// Show all PHP errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (phpversion() < 7) {
    die("<pre>Your server is using PHP version " . phpversion() . ".<br/>Please upgrade to PHP v7.0.25 or higher.");
}

// Autoload all Core classes
spl_autoload_register(function ($class_name) {
    include $class_name . ".php";
});

// Including configuration variables
require_once "config.php";

// Starting the app
require_once "start.php";
