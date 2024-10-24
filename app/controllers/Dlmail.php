<?php


namespace app\controllers;

use app\Controller;

class Dlmail extends Controller
{
    protected $check_array = ['mood','daterec','situation','cognition','dispute1', 'dispute2', 'dispute3', 'dispute4', 'dispute5', 'dispute6', 'dispute7','dispute8','dispute9','psy_email'];

    public function index()
    {
        if(!array_diff(array_keys($_POST), $this->check_array)){
            $dispute = $this->concat($_POST);

            $to = $this->clean($_POST['psy_email']);
            $subject = $_SESSION['user_name'];
            $mood = $this->clean($_POST['mood']) ?: 'Клиент не заполнил графу с настроением =(';
            $date = $this->clean($_POST['daterec'])?:'Клиент не заполнил графу с датой =(';
            $situation = $this->clean($_POST['situation'])?:'Клиент не описал ситуацию =(';
            $cognition = $this->clean($_POST['cognition'])?:'Клиент не указал когниции и образы =(';
            $dispute = $this->clean($dispute)?:'Клиент не заполнил графу с диспутом, оценкой мыслей =(';
            $message = '
                    От: '.$subject.'
                    
                    Настроение: '.$mood.'
                    
                    Число заполнения: '.$date.'
                    
                    Ситуация: '.$situation.'
                    
                    Мысли: '.$cognition.'
                    
                    Диспут: '.$dispute.'
                    ';

            $headers = 'From: ' . $subject . "\r\n";
            $res = mail($to, $subject, $message, $headers);
            if($res)echo 'Вроде отправил, но это не значит, что дошло... ;).msg';
            else echo 'Что-то пошло не так. Попробуйте ещё раз =).msg';
        }else echo 'Что-то пошло не так =(.msg';

    }
}