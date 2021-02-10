<?php

// FRONT CONTROLL

// 1. main settings
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. include system files

use Core\Router;

define('ROOT', dirname(__FILE__)); // initializing root constant

require_once(ROOT.'/core/Router.class.php');



// 3. defining connection to database


//4. Call Router

$router = new Router();

$router->run();



?>


