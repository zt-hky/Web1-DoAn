<?php


$id=$_GET['id'];
$spBUS=new BUS\sanphamBUS();


$SP = $spBUS->getbyID($id);



$idNSX=$SP->idNSX;

$idNSX=(int)$idNSX;

$nsxBUS=new BUS\NhaSanXuatBUS();
$nsx=$nsxBUS->getdatabyid($idNSX);




$lspBUS = new BUS\LoaiSanPhamBUS();

$tenlSP=$lspBUS->getdatabyid($idlSP);


$spBUS2=new BUS\SanPhamBUS;
$spBUS2->getSPlquan($idlSP);



if($id==false)
{
    require('404.php');
    return;
}

$url = $_GET['Url'];

if($url != $SP->Url)
{
    $fullUrlSP = $SP->Url."-".$SP->idSanPham.".html";
    $header_str = "Location: ".$fullUrlSP;
    header($header_str);
    exit;
}

$lspBUS = new BUS\LoaiSanPhamBUS();
$v_Data=array();
$v_Data['lstLoaiSanPham'] = $lspBUS->getAllAvailable();
$v_Data['chitiet']=$SP;
$v_Data['nsx']=$nsx;

$v_Data['loaiSP']=$tenlSP;
$v_Data['SPlquan']=$spBUS2->getDataLimit(1,6);



View('page/chitiet',$v_Data);
