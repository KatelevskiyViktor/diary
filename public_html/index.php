<?php
session_start();


require __DIR__ . '/../app/autoload.php';
echo "<img src='img/diary_face.png' hidden alt='Дневник КПТ'>";
$ctrl = (!empty($_SESSION['user_name']) &&
        !empty($_SESSION['user_email']) &&
        !empty($_SESSION['user_id'])) ?
        !empty($_GET['ctrl']) ? $_GET['ctrl'] : 'Index' : 'Authorization';



if ($_POST['mail'] == 'ok') $ctrl = 'Mail';//Here was if isset() by 13 to 27
elseif ($_POST['mail'] == 'dl') $ctrl = 'DLMail';
elseif ($_POST['mail'] == 'bl') $ctrl = 'BlMail';
elseif ($_POST['mail'] == 'rgu') $ctrl = 'RGUMail';
elseif ($_POST['archive'] == 'ok') $ctrl = 'Record';
elseif ($_POST['archive'] == 'dl') $ctrl = 'DLRecord';
elseif ($_POST['archive'] == 'bl') $ctrl = 'BlRecord';
elseif ($_POST['archive'] == 'rgu') $ctrl = 'RGURecord';
elseif ($_POST['archive'] == 'ed') $ctrl = 'RGURecord';
elseif ($_POST['reg'] == 'ok') $ctrl = 'Reg';
elseif ($_POST['ent'] == 'en') $ctrl = 'Ent';
elseif ($_POST['chp'] == 'ok') $ctrl = 'Chp';
elseif ($_POST['change_pass'] == 'rec') $ctrl = 'RecNP';
elseif ($_GET['ctrl'] == 'ChangePass') $ctrl = 'ChangePass';
elseif ($_GET['ctrl'] == 'CheckLink' && !empty($_GET['token'])) $ctrl = 'CheckLink';


try {
    $class = '\app\Controllers\\' . $ctrl;
    $ctrl = new $class;
    $ctrl();
}catch (\app\DbException $err){
    echo 'Ошибка в БД:' . $err->getMessage();
    die();
}catch (\app\OtherException $err){
    echo $err->getMessage();
    die();
}





