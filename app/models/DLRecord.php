<?php


namespace app\models;

use app\Model;

class DLRecord extends Model
{
    const TABLE = 'dl_records';

    public $id;
    public $mood;
    public $daterec;
    public $situation;
    public $cognition;
    public $dispute;
    public $user_id;
    public $user_name;

}