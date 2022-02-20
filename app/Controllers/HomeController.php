<?php

namespace App\Controllers;

use Medoo\Medoo;

class HomeController extends Controller
{
    static public function index() : void
    {
        self::render('home/index');
    }    
}