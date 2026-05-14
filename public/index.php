<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/../vendor/autoload.php';
require '../helpers.php';

use Framework\Router;


// require '../helpers.php';
// require basePath('Framework/Router.php');
// require basePath('Framework/Database.php');

// $config = require basePath('config/db.php');

// $db = new Database($config);

// Instatiate the router
$router = new Router();

// Get routes
require basePath('Routes.php');

// Get current URI and HTTP method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

// Route the request
$router->route($uri, $method);
