<?php


namespace app\Controllers;

use app\Controller;

class RecNP extends Controller
{
    protected $check_array = ['new_pass', 'change_pass'];

    protected function handle()
    {

        if(!array_diff($this->check_array, array_keys($_POST))){

            $userdata = new \app\Models\RecNP();
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