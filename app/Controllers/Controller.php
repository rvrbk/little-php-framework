<?php

namespace App\Controllers;

use League\Plates\Engine;

class Controller
{
    static public function render(string $plate) : void
    {
        $engine = new Engine('views');

        echo $engine->render($plate);
    }
}