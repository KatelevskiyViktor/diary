<?php


namespace app\Controllers;

use app\Controller;

class ChangePass extends Controller
{

    protected function handle()
    {
        echo $this->view->render(__DIR__.'/../../templates/change_pass.php');
    }
}