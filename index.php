<?php

ob_start();

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(site(), ":");
$router->namespace("Source\\App");

$router->dispatch();

ob_end_flush();