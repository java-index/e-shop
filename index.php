<?php

// FRONT CONTROLLER

// 1. Common settings
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Get  Files
define('ROOT', dirname(__FILE__));
require_once(ROOT . '/components/Router.php');

// 3. Connect to DB




// 4. Call Router
$router = new Router;
$router->run();
