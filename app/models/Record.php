<?php


namespace app\models;

use app\Model;

class Record extends Model
{
    const TABLE = 'records';

    public $id;
    public $mood;
    public $daterec;
    public $situation;
    public $reaction;
    public $cognition;
    public $dispute;
    public $result;
    public $user_id;
    public $user_name;

}