<?php

namespace App\Controllers;

class HomeController extends Controller
{
    static public function index() : void
    {
        self::render('home/index');
    }    
}