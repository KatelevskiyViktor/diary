<?php


namespace app\Controllers;


use app\Controller;

class RGU extends Controller
{

    protected function handle()
    {
        echo $this->view->render(__DIR__.'/../../templates/rgu.php');
    }
}