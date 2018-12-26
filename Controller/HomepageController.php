<?php

$v_Data = array();

$lspBUS = new BUS\LoaiSanPhamBUS();
$spBUS  = new BUS\SanPhamBUS();

$limit = 4;
$page = empty($_GET['page'])?1:$_GET['page'];
$amountPage = $spBUS->countPageVail($limit);


$v_Data['lstLoaiSanPham'] = $lspBUS->getAllAvailable();
$v_Data['lstSanPham']     = $spBUS->getAvailLimit($page,$limit);
$v_Data['page']           = array('page'=>$page,'amountPage'=>$amountPage);

View('page/homepage',$v_Data);