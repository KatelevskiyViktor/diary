<?php


namespace app\Controllers;

use app\Controller;

class Bliez extends Controller
{

    protected function handle()
    {
        echo $this->view->render(__DIR__ . '/../../templates/bliez.php');
    }
}