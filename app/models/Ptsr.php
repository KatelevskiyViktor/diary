<?php

namespace app\models;

use app\Model;

class Ptsr extends Model
{
    const TABLE = 'ptsr';

    public $id;
    public $user_id;
    public $motivation;
}