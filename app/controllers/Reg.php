<?php

namespace app\controllers;

use app\Controller;

class Reg extends Controller
{

    protected $check_array = ['username_reg', 'password_reg', 'email'];

    public function index()
    {
        if(!array_diff($this->check_array, array_keys($_POST))){

            $userdata = new \app\models\Reg();
            $userdata->username = $this->clean($_POST['username_reg']);
            $userdata->password = password_hash($this->clean($_POST['password_reg']), PASSWORD_BCRYPT);
            $userdata->email = $this->clean($_POST['email']);

            $checkUsername = \app\models\Reg::findAll([':username'=>$userdata->username], ' WHERE username=:username');
            $checkUseremail = \app\models\Reg::findAll([':email'=>$userdata->email], ' WHERE email=:email');


            if ($checkUsername[0])
                echo 'Пользователь с таким именем уже существует. Измените имя и попробуйте ещё раз.msg';
            elseif ($checkUseremail[0])
                echo 'Пользователь с такой почтой уже существует. Измените почту и попробуйте ещё раз.msg';
            else {
                if(!$userdata->insert()) echo 'Что-то полно не так =(.msg';
            }

        }else echo 'Что-то полно не так =(.msg';
    }
}