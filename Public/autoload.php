<?php

function __autoload($class_name) {
	require_once("../$class_name.php");
}


require_once ('../View/View.php');

function Controller($controller)
{
    require_once("../Controller/".$controller."Controller.php");
}




