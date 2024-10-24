<?php


namespace app\controllers;

use app\Controller;

class Ent extends Controller
{

    protected $check_array = ['username', 'password'];

    public function index()
    {
        if(!array_diff($this->check_array, array_keys($_POST))){

            $userdata = new \app\models\Ent();
            $userdata->username = $this->clean($_POST['username']);
            $userdata->password = $this->clean($_POST['password']);
            $user = \app\models\Ent::findAll([':username'=>$userdata->username], ' WHERE username=:username');

            if (password_verify($userdata->password, $user[0]->password)
                && $user[0]->username == $userdata->username)
            {
                $userdata->email = $user[0]->email;
                $_SESSION['user_name'] = $user[0]->username;
                $_SESSION['user_email'] = $user[0]->email;
                $_SESSION['user_id'] = $user[0]->id;

                echo 'Отлично, есть такой человек у нас.rbt';
            }
            else echo 'Пользователя с таким именем и паролем нет. Попробуйте ещё раз.msg';
        }else echo 'Что-то полно не так =(.msg';
    }
}