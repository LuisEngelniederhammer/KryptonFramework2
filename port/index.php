<?php
require_once __DIR__ . '../src/routes.php';
$API->setRouter($Router);

$API->run();