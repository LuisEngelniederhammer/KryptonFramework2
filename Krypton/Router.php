<?php
namespace Krypton;

use Krypton\Models\Route;

final class Router
{
    private $routes;

    public function __construct()
    {
        $this->routes = [];
    }

    public function injectRoute (Route $route)
    {
        $this->routes[] = $route;
    }
}

