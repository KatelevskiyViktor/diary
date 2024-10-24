<?php


namespace app\controllers;


use app\Controller;

class Rgu extends Controller
{

    public function index()
    {
        $title = 'Работа с глубинным убеждением';
        $script = 'script/script_rgu.js';
        echo $this->view->render(__DIR__.'/../../templates/rgu.php', compact('title', 'script'));
    }
}