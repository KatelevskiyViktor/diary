<?php

namespace app\controllers;

use app\Controller;

class Ptsr extends Controller
{

    public function index()
    {
        $title = 'ПТСР';
        $script = 'script/ptsr.js';
        $motivation = (new \app\models\Ptsr())::findById($_SESSION['user_id'], 'user_id')->motivation;
        $mfai = \app\models\Myfeelandimage::findAll([':user_id'=> $_SESSION['user_id']]," WHERE user_id=:user_id ORDER BY id DESC LIMIT 10");
        if(!isset($_SESSION['motivation']))$_SESSION['motivation'] = $motivation;
        echo $this->view->render(__DIR__.'/../../templates/ptsr.php', compact('title', 'script', 'motivation', 'mfai'));
    }

    public function motivation()
    {
        $motivation_new = clean($_POST['motivation']);
        $motivation_old = $_SESSION['motivation'];
        if($motivation_new !== $motivation_old) {
            $user_ptsr_data = new \app\models\Ptsr();
            $user_ptsr_data->user_id = $_SESSION['user_id'];
            $user_ptsr_data->motivation = $motivation_new;
            $user_ptsr_data->update();
        }
    }

}