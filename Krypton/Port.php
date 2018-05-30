<?php
namespace Krypton;

use Krypton\Interfaces\Request;

class Port extends Request
{
    private $HTTPMethod;

    private $Router;

    public function __construct()
    {
        $this->HTTPMethod = $_SERVER['REQUEST_METHOD'] ?? null;
    }

    public function run()
    {
        echo 'Hello world ' . $this->HTTPMethod;
    }

    public function setRouter(Router $router)
    {
        $this->Router = $router;
    }
}