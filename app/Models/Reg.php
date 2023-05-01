<?php


namespace app\Models;

use app\Model;

class Reg extends Model
{
    const TABLE = 'users';

    public $username;
    public $password;
    public $email;
}