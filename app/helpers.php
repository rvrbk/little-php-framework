<?php

use Symfony\Component\Dotenv\Dotenv;

$env = new Dotenv();

$env->load(__DIR__ . '/../.env');

function env(string $key, mixed $default = null) : string
{
    if (array_key_exists($key, $_ENV)) {
        return $_ENV[$key];
    }

    return (!is_null($default) ? $default : '');
}