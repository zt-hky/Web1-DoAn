<?php

function __autoload($class_name) {
	require_once("../$class_name.php");
}



function Controller($controller)
{
    require_once("../Controller/".$controller."Controller.php");
}

function View($view)
{
    require("../View/".$view.".php");
}


global $CONFIG;
$CONFIG = parse_ini_file("../config.ini"); 