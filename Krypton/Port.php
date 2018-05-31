<?php
namespace Krypton;

class Port
{
    private $HTTPMethod;

    private $Router;

    public function __construct()
    {
        $this->HTTPMethod = $_SERVER['REQUEST_METHOD'] ?? null;
    }

    public function run()
    {
    }

    public function setRouter(Router $router)
    {
        $this->Router = $router;
    }
}