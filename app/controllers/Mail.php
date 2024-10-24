<?php


namespace app\controllers;


use app\Controller;

class Mail extends Controller
{
    protected $check_array = ['mood', 'daterec', 'situation', 'cognition',
                                'reaction', 'dispute', 'result', 'psy_email'];

    public function index()
    {
        if(!array_diff(array_keys($_POST),$this->check_array)){

            $to = $this->clean($_POST['psy_email']);
            $subject = $_SESSION['user_name'];
            $mood = $this->clean($_POST['mood']) ?: 'Клиент не заполнил графу с настроением =(';
            $date = $this->clean($_POST['daterec'])?:'Клиент не заполнил графу с датой =(';
            $situation = $this->clean($_POST['situation'])?:'Клиент не описал ситуацию =(';
            $cognition = $this->clean($_POST['cognition'])?:'Клиент не указал когниции и образы =(';
            $reaction = $this->clean($_POST['reaction'])?:'Клиент не описал свои реакции =(';
            $dispute = $this->clean($_POST['dispute'])?:'Клиент не заполнил графу с диспутом, оценкой мыслей =(';
            $result = $this->clean($_POST['result'])?:'Клиент не описал результат =(';
            $message = '
                    Настроение: '.$mood.'
                    
                    Число заполнения: '.$date.'
                    
                    Ситуация: '.$situation.'
                    
                    Мысли: '.$cognition.'
                    
                    Реакции: '.$reaction.'
                    
                    Диспут: '.$dispute.'
                    
                    Результат: '.$result.'
                    ';
            $headers = 'From: ' . $subject . "\r\n";
            $res = mail($to, $subject, $message, $headers);
            if($res)echo 'Вроде отправил, но это не значит, что дошло... ;).msg';
            else echo 'Что-то пошло не так. Попробуйте ещё раз =).msg';
        }else echo 'Что-то пошло не так =(. Кажестя кто-то хитрит ;).msg';

    }
}