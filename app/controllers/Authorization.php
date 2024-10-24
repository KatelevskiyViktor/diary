<?php

namespace app\controllers;

use app\Controller;

class Authorization extends Controller
{
    public function index()
    {
        echo $this->view->render(__DIR__ . '/../../templates/authorization.php');
    }
}