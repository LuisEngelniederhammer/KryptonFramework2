<?php
namespace Krypton;

require_once __DIR__ . '/Interfaces/HTTPMethods.php';
require_once __DIR__ . '/Models/Route.php';
require_once __DIR__ . '/Models/Request.php';
require_once __DIR__ . '/Models/Response.php';

use Krypton\Models\Request;
use Krypton\Models\Response;
use Krypton\Models\Route;
use Krypton\Interfaces\HTTPMethods;

class Router
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

    public function getRoutes() {
        return $this->routes;
    }

    public function runRoutes(Request &$request, Response &$response)
    {
        /**
         * @var Route $route
         */
        foreach ($this->routes as $route)
        {
            if ($route->getHTTPMethod() === $request->getHTTPMethod() && $route->getRoutePath() === $request->getPath())
            {
                call_user_func($route->getCallback(), $request, $response);
            }
        }
    }

    final public function get(string $routePath, callable $callback)
    {
        $this->addRoute(HTTPMethods::GET, $routePath, $callback);
    }
}

