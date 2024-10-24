<?php

namespace app\controllers;

use app\Controller;
use app\OtherException;

class Checklink extends Controller
{
    public function index()
    {
        $delta = 86400;
        $user = \app\models\Ent::findAll([':token'=>$_GET['token']], ' WHERE token=:token');
        if (($_SERVER["REQUEST_TIME"] - $user[0]->tstamp > $delta) || !$user[0])
            throw new OtherException("Время жизни ссылки истекло. Либо такой ссылки нет =(");
        else{
            $_SESSION['user_id'] = $user[0]->id;
            $_SESSION['user_token'] = $user[0]->token;
            echo $this->view->render(__DIR__ . '/../../templates/change_pass_form.php');
        }



    }
}