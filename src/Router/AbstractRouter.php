<?php

declare(strict_types=1);

namespace App\Router;

use App\Container;

abstract class AbstractRouter
{
    public function addRoute(string $class): object
    {
        return (new Container($class))->resolveClass();
    }
}