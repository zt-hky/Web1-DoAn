<?php

$urlNSX = $_GET['nsx'];

$nsxBUS = new BUS\NhaSanXuatBUS();

$idNSX = $nsxBUS->getIdFURL($urlNSX);

if($idNSX==false)
{
    require('404.php');
    return;
}

$v_Data = array();

$lspBUS = new BUS\LoaiSanPhamBUS();
$spBUS  = new BUS\SanPhamBUS();

$limit = 10;
$page = empty($_GET['page'])?1:$_GET['page'];
$amountPage = $spBUS->countPageVail($limit);


$v_Data['lstLoaiSanPham'] = $lspBUS->getAllAvailable();
$v_Data['lstSanPham']     = $spBUS->getAvailLimit($page,$limit);
$v_Data['page']           = array('pageNow'=>$page,'amountPage'=>$amountPage);
$v_Data['lstNSX']         = $nsxBUS->getAllAvailable();

View('page/homepage',$v_Data);