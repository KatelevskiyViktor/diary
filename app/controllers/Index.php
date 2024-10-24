<?php

namespace app\controllers;

use app\Controller;

class Index extends Controller
{
    public function index()
    {
        $title = 'Дневник';
        $script = 'script/script.js';
        echo $this->view->render(__DIR__.'/../../templates/diary.php', compact('title', 'script'));
    }
}