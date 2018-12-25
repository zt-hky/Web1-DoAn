<?php
// Load Config
GLOBAl $__gCONFIG;
$__gCONFIG = parse_ini_file("../config.ini"); 

// Auto Load 
function __autoload($class_name) {
	require_once("../$class_name.php");
}

function asset($dir)
{
    GLOBAl $__gCONFIG;
    echo $__gCONFIG['domain'].'/'.$dir;
}

// Hàm gọi controller
function Controller($controller)
{   
    require_once("../Controller/".$controller."Controller.php");
}





// Hàm load View
function View($view,$data= array())
{
    extract($data);
    require("../View/".$view.".php");
}

