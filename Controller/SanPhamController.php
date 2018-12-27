<?php


$id=$_GET['id'];
$spBUS=new BUS\sanphamBUS();


$SP = $spBUS->getbyID($id);

$idlSP=$SP->idLoaiSanPham;
$idlSP=(int)$idlSP;

$SPlquan=$spBUS->getSPlquan($idlSP);


if($id==false)
{
    require('404.php');
    return;
}
$url=$_GET['Url'];
$lspBUS = new BUS\LoaiSanPhamBUS();
$v_Data=array();
$v_Data['lstLoaiSanPham'] = $lspBUS->getAllAvailable();
$v_Data['chitiet']=$SP;
$v_Data['SPlquan']=$SPlquan;



View('page/chitiet',$v_Data);
