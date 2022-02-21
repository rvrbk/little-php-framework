<?php

use Symfony\Component\Dotenv\Dotenv;

$env = new Dotenv();

$env->load(__DIR__ . '/../.env');

/**
 * Get an $_ENV variable
 *
 * @param string $key
 * @param mixed $default
 * @return string
 */
function env(string $key, mixed $default = null) : string
{
    return $_ENV[$key] ?? (string) $default;
}

/**
 * Dump a variable
 *
 * @param mixed $variable
 * @return string
 */
function dd(mixed $variable) : string
{
    if (!is_cli()) {
        echo '<pre>';
    }
     
    var_dump($variable);
    exit;
}

/**
 * @return boolean
 */
function is_cli() : bool
{
    return (php_sapi_name() === 'cli');
}