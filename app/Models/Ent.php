<?php


namespace app\Models;

use app\Model;

class Ent extends Model
{
    const TABLE = 'users';

    public $email;
    public $username;
    public $password;

}