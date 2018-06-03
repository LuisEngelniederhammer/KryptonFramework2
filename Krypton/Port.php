<?php
namespace Krypton;

require_once __DIR__ . '/Models/Request.php';

use Krypton\Models\Request;

class Port
{
    private $Request;
    private $Response;

    private $Router;

    public function __construct()
    {
        ob_start();
        $this->Request = new Request();
        $this->Request->setHTTPMethod($_SERVER['REQUEST_METHOD'] ?? null);
        $this->Request->setPath($_SERVER['QUERY_STRING'] ?? null);

        var_dump(json_encode($this->Request));
    }

    public function run()
    {
        echo json_encode($this->Request);
        ob_flush();
    }

    public function setRouter(Router $router)
    {
        $this->Router = $router;
    }
}