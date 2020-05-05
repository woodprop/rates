<?php


abstract class Controller
{
    public function template($view, array $vars = []){
        foreach ($vars as $key => $value){
            $$key = $value;
        }
        ob_start();
        include "views/{$view}.php";
        return ob_get_clean();
    }

    abstract protected function render();
}