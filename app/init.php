<?php

define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define('PATH', 'http://diary');
define("DEBUG", 1);
define("LOGS", ROOT . '/tmp/logs');

require_once __DIR__ . '/../vendor/autoload.php';