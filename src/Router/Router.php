<?php

declare(strict_types=1);

namespace App\Router;

use App\Controller\IndexController;
use App\Router\AbstractRouter;

class Router extends AbstractRouter
{
    public function __construct(private readonly string $endpoint)
    {

    }

    public function execute()
    {
        return match($this->endpoint) {
            '/' => $this->addRoute(IndexController::class)->index(),
        };
    }
}