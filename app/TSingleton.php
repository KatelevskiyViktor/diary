<?php


namespace app;


trait TSingleton
{
    private static $instance = null;

    private function __construct(){}

    public static function getInstance()
    {
        return static::$instance ?? static::$instance = new static();
    }


    private function __clone() {
    }

    private function __wakeup() {
    }
}