<?php

namespace app\Controllers;

use app\Controller;
use app\OtherException;

class CheckLink extends Controller
{
    protected function handle()
    {
        $delta = 86400;
        $user = \app\Models\Ent::findAll(' WHERE token=:token',
            [':token'=>$_GET['token']]);
        if (($_SERVER["REQUEST_TIME"] - $user[0]->tstamp > $delta) || !$user[0])
            throw new OtherException("Время жизни ссылки истекло. Либо такой ссылки нет =(");
        else{
            $_SESSION['user_id'] = $user[0]->id;
            $_SESSION['user_token'] = $user[0]->token;
            echo $this->view->render(__DIR__.'/../../templates/change_pass_form.php');
        }



    }
}