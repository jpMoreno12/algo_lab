<?php

namespace Yoan77\AutoLib\Internal;

class Request
{
    public string $method;

    public array $query;

    public array $body;

    public function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

        $this->query = $_GET;

        $contentType = $_SERVER['CONTENT_TYPE'] ?? '';

        if (str_contains($contentType, 'application/json')) {
            $this->body = json_decode(file_get_contents("php://input"), true) ?? [];
        } else {
            $this->body = $_POST;
        }
    }
}
