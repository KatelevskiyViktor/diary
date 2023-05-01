<?php


namespace app\Controllers;


use app\Controller;

class RGURecord extends Controller
{
    protected $check_array = ['daterec','cognition','dispute', 'archive'];

    protected function handle()
    {
        if(!array_diff(array_keys($_POST), $this->check_array)){

            $record = new \app\Models\RGURecord();
            $record->daterec = $this->clean($_POST['daterec']) ?: 'Почему-то пропустил(а) =(';
            $record->cognition = $this->clean($_POST['cognition']) ?: 'Почему-то пропустил(а) =(';
            $record->dispute = $this->clean($_POST['dispute']) ?: 'Почему-то пропустил(а) =(';
            $record->user_id = $_SESSION['user_id'];
            $record->user_name = $_SESSION['user_name'];


            $res = $record->insert();
            if($res)echo 'Ага, запись добавлена =).msg';
            else echo 'Что-то пошло не так. Попробуйте ещё раз =).msg';

        }else echo 'Что-то полно не так =(.msg';

    }
}