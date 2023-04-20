<?php

    // compare les version de php
    if (version_compare(PHP_VERSION, '8.0.0', '<'))
        exit('Your PHP version is ' . PHP_VERSION . '. The script requires PHP 8 or higher.');
    if (!extension_loaded('mbstring'))
     exit('The script requires "mbstring" PHP extension. Please install it.');

     // Déclaration des constantes
    define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
    define('LIB', ROOT . 'Lib' . DIRECTORY_SEPARATOR);
    define('VUE', ROOT . 'Template' . DIRECTORY_SEPARATOR);
    define('CONTROLLER', ROOT . 'Controller' . DIRECTORY_SEPARATOR);
    define('MODEL', ROOT . 'Model' . DIRECTORY_SEPARATOR);
    define('VENDOR', ROOT . 'vendor' . DIRECTORY_SEPARATOR);
    

    // Inclusion des fichiers
    require_once ROOT . 'autoload.php';

    $init = new Core();