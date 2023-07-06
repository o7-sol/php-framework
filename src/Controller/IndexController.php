<?php

declare(strict_types=1);

namespace App\Controller;

use App\Response\HttpResponse;
use App\Controller\AbstractController;
use App\Service\AnotherService;
use App\Service\TestService;

class IndexController extends AbstractController
{
    public function __construct(
        private readonly TestService $testService,
        private readonly AnotherService $anotherService,
    )
    {}

    public function index(): HttpResponse
    {
        return new HttpResponse('I\'m Home', 200);
    }
}