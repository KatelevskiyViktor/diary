<?php


namespace app\controllers;

use app\Controller;

class Changepass extends Controller
{

    public function index()
    {
        echo $this->view->render(__DIR__.'/../../templates/change_pass.php');
    }
}