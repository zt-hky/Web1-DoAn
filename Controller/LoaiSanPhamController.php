<?php

$urlLSP = $_GET['lsp'];

$lspBUS = new BUS\LoaiSanPhamBUS();

$idLSP = $lspBUS->getIdUrl($urlLSP);

if($idLSP==false)
{
    require('404.php');
    return;
}

$v_Data = array();

$lspBUS = new BUS\LoaiSanPhamBUS();
$spBUS  = new BUS\SanPhamBUS();
$nsxBUS = new BUS\NhaSanXuatBUS();

$limit = 20;
$page = empty($_GET['page'])?1:$_GET['page'];

$spBUS->readVailLSP($idLSP);

$amountPage = $spBUS->CountPage($limit);


$v_Data['lstLoaiSanPham'] = $lspBUS->getAllAvailable();
$v_Data['lstSanPham']     = $spBUS->getDataLimit($page,$limit);
$v_Data['page']           = array('pageNow'=>$page,'amountPage'=>$amountPage);
$v_Data['lstNSX']         = $nsxBUS->getAllAvailable();

View('page/homepage',$v_Data);