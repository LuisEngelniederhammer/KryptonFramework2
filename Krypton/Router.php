<?php
namespace Krypton;

use Krypton\Models\Route;
use Krypton\Interfaces\HTTPMethods;

final class Router
{
    private $routes;

    public function __construct()
    {
        $this->routes = [];
    }

    private function addRoute(string $HTTPMethod, string $routePath, callable $callback)
    {
        $route = new Route();
        $route->setHTTPMethod($HTTPMethod);
        $route->setRoutePath($routePath);
        $route->setCallback($callback);
        $this->routes[] = $route;
    }

    final public function get(string $routePath, callable $callback)
    {
        $this->addRoute(HTTPMethods::GET, $routePath, $callback);
    }
}

