<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use Matt\PhpLogging\App\Router;
use Matt\PhpLogging\Controller\{HomeController, ProductController};
use Matt\PhpLogging\Middleware\AuthMiddleware;

// Router::add('GET', '/', HomeController::class, 'index');

Router::run();