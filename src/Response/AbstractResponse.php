<?php

declare(strict_types=1);

namespace App\Response;

use App\Response\Response;

abstract class AbstractResponse implements Response
{
    public function __construct(
        private readonly string $response,
        private readonly int $statusCode,
    )
    {}

    public function getResponse(): string
    {
        return $this->response;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
}