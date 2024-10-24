<?php


namespace app\controllers;


use app\Controller;

class Dlrecord extends Controller
{
    protected $check_array = ['mood','daterec','situation','cognition','dispute1', 'dispute2', 'dispute3', 'dispute4', 'dispute5', 'dispute6', 'dispute7','dispute8','dispute9'];

    public function index()
    {
        if(!array_diff(array_keys($_POST),$this->check_array)){
            $dispute = $this->concat($_POST);

            $record = new \app\models\DLRecord();
            $record->mood = $this->clean($_POST['mood']) ?: 'Почему-то пропустил(а) =(';
            $record->daterec = $this->clean($_POST['daterec']) ?: 'Почему-то пропустил(а) =(';
            $record->situation = $this->clean($_POST['situation']) ?: 'Почему-то пропустил(а) =(';
            $record->cognition = $this->clean($_POST['cognition']) ?: 'Почему-то пропустил(а) =(';
            $record->dispute = $this->clean($dispute) ?: 'Почему-то пропустил(а) =(';
            $record->user_id = $_SESSION['user_id'];
            $record->user_name = $_SESSION['user_name'];


            $res = $record->insert();
            if($res)echo 'Ага, запись добавлена =).msg';
            else echo 'Что-то пошло не так. Попробуйте ещё раз =).msg';
        }else echo 'Что-то пошло не так =(.msg';
    }
}