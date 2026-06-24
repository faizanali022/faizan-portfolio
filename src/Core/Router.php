<?php
namespace App\Core;

class Router
{
    protected array $routes = [];

    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    /**
     * Match the current URI and return controller & method.
     */
    public function dispatch(string $uri): ?array
    {
        // Remove query string
        $uri = parse_url($uri, PHP_URL_PATH);
        $uri = rtrim($uri, '/') ?: '/';

        if (isset($this->routes[$uri])) {
            return explode('@', $this->routes[$uri]);
        }

        // 404 fallback
        return ['PageController', 'notFound'];
    }
}