<?php


namespace app;


class View
{
    public function render($template, $data = []){
        ob_start();
        require_once $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;

    }
}