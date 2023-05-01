<?php

namespace app\Controllers;

use app\Controller;

class Index extends Controller
{
    protected function handle()
    {
        echo $this->view->render(__DIR__.'/../../templates/diary.php');
    }
}