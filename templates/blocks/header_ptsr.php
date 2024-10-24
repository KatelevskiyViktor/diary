<?php
use app\View;
/** @var $data View */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $data['title'] ?></title>
    <link rel="stylesheet" href="<?= PATH ?>/css/reset.min.css">
    <link rel="stylesheet" href="<?= PATH ?>/css/ptsr.css">
    <script src="<?= PATH ?>/script/jquery-3.5.1.min.js"></script>
    <script src="<?= PATH ?>/script/js.cookie.min.js"></script>
    <script src="<?= PATH ?>/fontawesome-free-6.5.2-web/js/all.min.js"></script>
    <script src="<?= PATH ?>/script/functions.js"></script>
    <script src="<?= PATH ?>/<?= $data['script'] ?>"></script>

</head>
<body>
<div class="container">
