<?php


namespace app\controllers;


use app\Controller;

class Record extends Controller
{
    protected $check_array = ['mood', 'daterec', 'situation', 'cognition',
        'reaction', 'dispute', 'result'];


    public function index()
    {
        if(!array_diff(array_keys($_POST),$this->check_array)){
            $record = new \app\models\Record();
            $record->mood = $this->clean($_POST['mood']) ?: 'Почему-то пропустил(а) =(';
            $record->daterec = $this->clean($_POST['daterec']) ?: 'Почему-то пропустил(а) =(';
            $record->situation = $this->clean($_POST['situation']) ?: 'Почему-то пропустил(а) =(';
            $record->reaction = $this->clean($_POST['reaction']) ?: 'Почему-то пропустил(а) =(';
            $record->cognition = $this->clean($_POST['cognition']) ?: 'Почему-то пропустил(а) =(';
            $record->dispute = $this->clean($_POST['dispute']) ?: 'Почему-то пропустил(а) =(';
            $record->result = $this->clean($_POST['result']) ?: 'Почему-то пропустил(а) =(';
            $record->user_name = $_SESSION['user_name'];
            $record->user_id = $_SESSION['user_id'];

            $res = $record->insert();
            if($res)echo 'Ага, запись добавлена =).msg';
            else echo 'Что-то пошло не так. Попробуйте ещё раз =).msg';
        }else echo 'Что-то полно не так =(.msg';

    }
}