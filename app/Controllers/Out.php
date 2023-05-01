<?php

namespace app\Controllers;

use app\Controller;

class Out extends Controller
{

    protected function handle()
    {
        session_unset();
//        header("Refresh:0,  url=/");
        echo "<script type=\"text/javascript\">window.location.href = '/';</script>";
    }
}