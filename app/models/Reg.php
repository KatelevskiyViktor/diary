<?php


namespace app\models;

use app\Model;

class Reg extends Model
{
    const TABLE = 'users';

    public $email;
    public $username;
    public $password;
}