<?php

namespace app;

class App
{
    public function __construct()
    {
        new ErrorHandler();
        session_start();
        Router::dispatch();
    }
}