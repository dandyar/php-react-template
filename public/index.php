<?php
require_once __DIR__ . '/src/php/Router.php';
require_once __DIR__ . '/src/php/Middleware.php';
require_once __DIR__ . '/src/php/Controllers/HomeController.php';
require_once __DIR__ . '/src/php/Controllers/AboutController.php';
require_once __DIR__ . '/src/php/Controllers/ContactController.php';

use App\Router;
use App\Middleware;

// Initialize router
$router = new Router();

// Add middleware
$router->addMiddleware(new Middleware());

// Define routes
$router->get('/', 'HomeController@index');
$router->get('/about', 'AboutController@index');
$router->get('/contact', 'ContactController@index');

// Handle the request
$router->dispatch();