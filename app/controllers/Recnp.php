<?php


namespace app\controllers;

use app\Controller;

class Recnp extends Controller
{
    protected $check_array = ['new_pass'];

    public function index()
    {
        if(!array_diff($this->check_array, array_keys($_POST))){

            $userdata = new \app\models\RecNP();
            $userdata->password = password_hash($this->clean($_POST['new_pass']), PASSWORD_DEFAULT);
            $userdata->token = '';
            $userdata->id = $_SESSION['user_id'];
            $er = $userdata->update();

            if($er)
            {
                echo 'Пароль обвновлён, сейчас вы будудете перенаправлены на стрницу авторизации.rbt';
                session_unset ();
            }
            else echo 'Не получилось обновить пароль. Попробуйте ещё раз =).msg';
        }else echo 'Что-то полно не так =(.msg';

    }
}