<?php


namespace app;


abstract class Controller
{
    protected $view;
    public function __construct()
    {
        $this->view = new View();

    }
    public function clean($value = "") {
        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);

        return $value;
    }

    public function concat($post)
    {
        $dispute = '';
        foreach ($post as $key => $value) {
            if(($key = substr($key, 0,7)) == 'dispute'){
                $dispute .= $value . ' ';
            }
        }
        return $dispute;
    }



}