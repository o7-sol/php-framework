<?php

declare(strict_types=1);

namespace App\Router;

use App\Container;
use App\Response\Response;

abstract class AbstractRouter
{
    public function addRoute(string $class): object
    {
        return (new Container($class))->resolveClass();
    }

    abstract public function execute(): Response;
}