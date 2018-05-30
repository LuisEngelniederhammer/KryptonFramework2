<?php
use Krypton\Port;
use Krypton\Router;

require_once __DIR__ . '/../Krypton/Port.php';
require_once __DIR__ . '/../Krypton/Router.php';

$API = new Port();
$API->setRouter(new Router());