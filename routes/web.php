<?php

use Bramus\Router\Router;

if (!is_cli()) {
    $router = new Router();

    $router->setNamespace('\App\Controllers');

    $router->get('/', 'HomeController@index');

    $router->run();
}