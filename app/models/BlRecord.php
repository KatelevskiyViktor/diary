<?php


namespace app\models;


use app\Model;

class BlRecord extends Model
{
    const TABLE = 'bliez_records';

    public $id;
    public $mood;
    public $daterec;
    public $cognition;
    public $dispute;
    public $user_id;
    public $user_name;
}