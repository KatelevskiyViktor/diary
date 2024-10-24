<?php

namespace app;

class Router
{
    public static function dispatch()
    {
        $url = trim(urldecode($_SERVER['QUERY_STRING']), '/');
        $query = explode('/', $url);
        if (count($query) == 1) array_push($query, "");//to fix error "Undefined offset 1"
        $ctrl = $query[0];
        $act = $query[1];

        if( !empty($_SESSION['user_name']) &&
            !empty($_SESSION['user_email']) &&
            !empty($_SESSION['user_id']) ){
            if($ctrl === '') $ctrl = 'index';
        } else ($ctrl == 'ent' && isset($_POST['username'])) ||
        ($ctrl === 'reg' && isset($_POST['email'])) ||
        ($ctrl === 'chp' && isset($_POST['email'])) ||
        ($ctrl === 'checklink' && !empty($_GET['token'])) ||
        ($ctrl === 'recnp' && isset($_POST['new_pass'])) ||
        $ctrl === 'changepass' ?: $ctrl = 'authorization';
        $ctrl = ucfirst($ctrl);
        if(class_exists('app\controllers\\'. $ctrl)){


            $class = '\app\Controllers\\' . $ctrl;

            if(method_exists($class, $act))(new $class())->$act();
            else (new $class())->index();


        } elseif ($ctrl === 'Ptsr'){
            echo 'Пока не сделал, в процессе =*';
        } else echo 'Не шали! =*';
    }
}