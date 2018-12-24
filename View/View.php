<?php  

class View{
    public static function make($view)
    {
        require_once('../View/'.$view.'.php');
    }
}