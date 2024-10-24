<?php


namespace app\controllers;


use app\Controller;

class Rgumail extends Controller
{
    protected $check_array = ['daterec','cognition','dispute','psy_email'];

    public function index()
    {
        if(!array_diff(array_keys($_POST), $this->check_array)){

            $to = $this->clean($_POST['psy_email']);
            $subject = $_SESSION['user_name'];
            $date = $this->clean($_POST['daterec'])?:'Клиент не заполнил графу с датой =(';
            $cognition = $this->clean($_POST['cognition'])?:'Клиент не указал когниции и образы =(';
            $dispute = $this->clean($_POST['dispute'])?:'Клиент не заполнил графу с диспутом, оценкой мыслей =(';
            $message = '
                    От: '.$subject.'
                    
                    Число заполнения: '.$date.'
                    
                    Мысли: '.$cognition.'
                    
                    Диспут: '.$dispute.'
                    ';
            $headers = 'From: ' . $subject . "\r\n";
            $res = mail($to, $subject, $message, $headers);
            if($res)echo 'Вроде отправил, но это не значит, что дошло... ;).msg';
            else echo 'Что-то пошло не так. Попробуйте ещё раз =).msg';
        }else echo 'Что-то полно не так =(.msg';

    }
}