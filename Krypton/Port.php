<?php
namespace Krypton;

class Port 
{
    private $HTTPMethod;
    public function __construct()
    {
        $this->HTTPMethod = $_SERVER['REQUEST_METHOD'] ?? null;
    }

    public function run() 
    {
        echo 'Hello world ' . $this->HTTPMethod;
    }
}