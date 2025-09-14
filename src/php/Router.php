<?php
namespace App;

/**
 * A simple router for handling HTTP requests.
 */
class Router {
    /**
     * @var array The registered routes.
     */
    private $routes = [];

    /**
     * @var array The registered middlewares.
     */
    private $middlewares = [];

    /**
     * Adds a middleware to the router.
     *
     * @param mixed $middleware The middleware to add.
     */
    public function addMiddleware($middleware) {
        $this->middlewares[] = $middleware;
    }

    /**
     * Registers a GET route.
     *
     * @param string $path The URL path.
     * @param string $handler The controller and method to handle the request (e.g., 'HomeController@index').
     */
    public function get($path, $handler) {
        $this->routes['GET'][$path] = $handler;
    }

    /**
     * Registers a POST route.
     *
     * @param string $path The URL path.
     * @param string $handler The controller and method to handle the request (e.g., 'HomeController@index').
     */
    public function post($path, $handler) {
        $this->routes['POST'][$path] = $handler;
    }

    /**
     * Dispatches the request to the appropriate handler.
     */
    public function dispatch() {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // Execute middlewares
        foreach ($this->middlewares as $middleware) {
            $middleware->handle();
        }

        if (isset($this->routes[$method][$path])) {
            $handler = $this->routes[$method][$path];
            $this->callHandler($handler);
        } else {
            http_response_code(404);
            echo "404 - Page Not Found";
        }
    }

    /**
     * Calls the handler for a given route.
     *
     * @param string $handler The handler to call.
     */
    private function callHandler($handler) {
        list($controller, $method) = explode('@', $handler);
        $controllerClass = "App\\Controllers\\$controller";

        if (class_exists($controllerClass)) {
            $instance = new $controllerClass();
            if (method_exists($instance, $method)) {
                $instance->$method();
            }
        }
    }
}
