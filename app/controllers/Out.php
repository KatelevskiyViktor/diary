<?php

namespace app\controllers;

use app\Controller;

class Out extends Controller
{

    public function index()
    {
        session_unset();
        header("Refresh:0,  url=/");
    }
}