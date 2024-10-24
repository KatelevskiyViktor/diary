<?php

namespace app\controllers;

use app\Controller;

class Diarylite extends Controller
{
    public function index()
    {
        $title = 'Упрощённый дневник';
        $script = 'script/script_dl.js';
        echo $this->view->render(__DIR__.'/../../templates/diary_lite.php', compact('title', 'script'));
    }
}