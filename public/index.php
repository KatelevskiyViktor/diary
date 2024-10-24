<?php
if(PHP_MAJOR_VERSION < 7){
    die('Необходима версия php >= 7');
}

require_once __DIR__.'/../app/init.php';
require_once __DIR__.'/../app/function.php';
new \app\App();









