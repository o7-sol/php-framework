<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use App\Router\Router;

$endpoint = $_SERVER['REQUEST_URI'];
$response = (new Router($endpoint))->execute();

echo $response->getResponse();