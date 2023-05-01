<?php

namespace app\Controllers;

use app\Controller;

class Reg extends Controller
{

    protected $check_array = ['username', 'password', 'email'];

    protected function handle()
    {

        if(!array_diff($this->check_array, array_keys($_POST))){
            $userdata = new \app\Models\Reg();
            $userdata->username = $this->clean($_POST['username']);
            $userdata->password = password_hash($this->clean($_POST['password']), PASSWORD_DEFAULT);
            $userdata->email = $this->clean($_POST['email']);

            $checkUsername = \app\Models\Reg::findAll(' WHERE username=:username',
                                                                [':username'=>$userdata->username]);
            $checkUseremail = \app\Models\Reg::findAll(' WHERE email=:email',
                                                                [':email'=>$userdata->email]);

            if ($checkUsername[0])
                echo 'Пользователь с таким именем уже существует. Измените имя и попробуйте ещё раз.msg';
            elseif ($checkUseremail[0])
                echo 'Пользователь с такой почтой уже существует. Измените почту и попробуйте ещё раз.msg';
            else $userdata->insert();

        }else echo 'Что-то полно не так =(.msg';
    }
}