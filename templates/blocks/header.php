<?php
use app\View;
/** @var $data View */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $data['title'] ?></title>

    <script src="<?= PATH ?>/script/jquery-3.5.1.min.js"></script>
    <script src="<?= PATH ?>/script/jquery.easing.1.3.js"></script>
    <script src="<?= PATH ?>/script/jquery.bpopup.min.js"></script>
    <script src="<?= PATH ?>/script/functions.js"></script>
    <script src="<?= PATH ?>/<?= $data['script'] ?>"></script>
    <link rel="stylesheet" href="<?= PATH ?>/css/style.css">
</head>
<body>
<img src='<?= PATH ?>/img/diary_face.png' hidden alt='Дневник КПТ'>
<?php include __DIR__ . '/nav_menu.php';?>
<div class="container">
