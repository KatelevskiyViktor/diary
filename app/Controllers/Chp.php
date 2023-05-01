<?php

namespace app\Controllers;

use app\Controller;

class Chp extends Controller
{
    protected function handle()
    {
        $userdata = new \app\Models\Chp();
        $email = $this->clean($_POST['email']);
        $user = \app\Models\Ent::findAll(' WHERE email=:email',
            [':email'=>$email]);
        if ($user)
        {
            $userdata->token = sha1(uniqid($user[0]->username, true));
            $userdata->tstamp = $_SERVER['REQUEST_TIME'];
            $userdata->id = $user[0]->id;

            $userdata->update();

            $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") .
                "://$_SERVER[HTTP_HOST]/?ctrl=CheckLink&token=$userdata->token";

            $message = "Здравствуйте, вот ваша ссылка для смены пароля:\n$url";
            $headers = 'From: ' . $user[0]->username . "\r\n";
            mail($email, "Смена пароля", $message, $headers);
            echo 'Проверьте свой почтовый ящик. Письмо отправлено.rbt';
        }
        else echo 'Пользователя с такой почтой нет. Попробуйте ещё раз.msg';


    }
}