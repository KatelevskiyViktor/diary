<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/mf');
define("HELPERS", ROOT . '/vendor/mf/helpers');
define("CACHE", ROOT . '/tmp/cache');
define("LOGS", ROOT . '/tmp/logs');
define("CONFIG", ROOT . '/config');
define("LAYOUT", 'myframy');
define('PATH', 'http://my.framework');
define('ADMIN', 'http://my.framework/admin');
define('NO_IMAGE', 'uploads/no_image.jpg');

require_once ROOT . '/vendor/autoload.php';
