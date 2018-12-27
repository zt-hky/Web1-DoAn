<?php


$id=$_GET['id'];
$spBUS=new BUS\sanphamBUS();


$SP = $spBUS->getbyID($id);

if($id==false)
{
    require('404.php');
    return;
}
if($_GET['url']==false)
{
    require('404.php');
    return;
}

$v_data=array();
$v_data['sanpham']=$SP;


View('page/chitiet',$SP);