<?php


namespace app;


abstract class Controller
{
    protected $view;
    public function __construct()
    {
        $this->view = new View();
    }

    protected function access():bool
    {
        return true;
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
                $dispute .= $value;
            }
        }
        return $dispute;
    }


    public function __invoke()
    {
        if($this->access()){
            $this->handle();
        }else{
            die('Нет доступа');
        }
    }

    abstract protected function handle();

}