<?php


namespace app\models;

use app\Model;

class RGURecord extends Model
{
    const TABLE = 'rgu_records';

    public $id;
    public $daterec;
    public $cognition;
    public $dispute;
    public $user_id;
    public $user_name;


}