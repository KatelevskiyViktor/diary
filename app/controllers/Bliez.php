<?php


namespace app\controllers;

use app\Controller;

class Bliez extends Controller
{

    public function index()
    {
        $title = 'Блиц';
        $script = 'script/script_bl.js';
        echo $this->view->render(__DIR__.'/../../templates/bliez.php', compact('title', 'script'));
    }
}