<?php

namespace app\models;

use app\Model;

class Myfeelandimage extends Model
{
    const TABLE = 'my_feel_and_image';

    public $id;
    public $user_id;
    public $situation;
    public $negative_thoughts;
    public $real_thoughts;
    public $date;
}