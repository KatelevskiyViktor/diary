<?php

namespace app\Controllers;

use app\Controller;

class Authorization extends Controller
{
    protected function handle()
    {
        echo $this->view->render(__DIR__.'/../../templates/authorization.php');
    }
}