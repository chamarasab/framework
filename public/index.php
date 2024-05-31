<?php

require_once '../core/Router.php';
require_once '../core/Controller.php';
require_once '../core/Model.php';

// Autoloading
spl_autoload_register(function ($class) {
    $root = dirname(__DIR__); // get the root directory
    $file = $root . '/' . str_replace('\\', '/', $class) . '.php';
    if (is_readable($file)) {
        require_once $file;
    }
});

use Core\Router;

$router = new Router();

// Load routes
require_once '../config/routes.php';

// Dispatch request
$url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$router->dispatch($url);
