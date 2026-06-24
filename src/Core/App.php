<?php
namespace App\Core;

class App
{
    protected Router $router;
    protected View $view;

    public function __construct()
    {
        // Define paths (go up 2 levels from src/Core to project root)
        define('ROOT_PATH', dirname(__DIR__, 2));
        define('TEMPLATES_PATH', ROOT_PATH . '/templates');
        define('DATA_PATH', ROOT_PATH . '/data');
        define('CONFIG_PATH', ROOT_PATH . '/config');
        
        $config = require CONFIG_PATH . '/config.php';
        define('APP_NAME', $config['site_name']);

        $routes = require CONFIG_PATH . '/routes.php';
        $this->router = new Router($routes);
        $this->view = new View();
    }

    public function run()
    {
        $uri = $_SERVER['REQUEST_URI'] ?? '/';
        $route = $this->router->dispatch($uri);

        if (!$route) {
            http_response_code(404);
            echo $this->view->render('404', [], 'Page Not Found');
            return;
        }

        [$controller, $method] = $route;
        $controllerClass = "App\\Controllers\\" . $controller;
        if (!class_exists($controllerClass)) {
            http_response_code(500);
            echo "Controller not found";
            return;
        }

        $controllerInstance = new $controllerClass($this->view);
        if (!method_exists($controllerInstance, $method)) {
            http_response_code(500);
            echo "Method not found";
            return;
        }

        echo $controllerInstance->$method();
    }
}