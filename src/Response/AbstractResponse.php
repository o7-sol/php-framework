<?php

declare(strict_types=1);

namespace App\Response;

abstract class AbstractResponse
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