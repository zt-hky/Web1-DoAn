<?php

$action = empty($_GET['a'])?"listdanhmuc":$_GET['a'];


$lstAction = array("listdanhmuc","listsanpham","themdanhmuc","themsanpham","userlist");



if(!in_array($action,$lstAction))
{
   require('404.php');
    return;
}



view('page/admin',array('action'=>$action));