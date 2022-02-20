<?php

use Symfony\Component\Dotenv\Dotenv;

$env = new Dotenv();

$env->load(__DIR__ . '/../.env');

function env(string $key, mixed $default = null) : string
{
    return $_ENV[$key] ?? (string) $default;
}
