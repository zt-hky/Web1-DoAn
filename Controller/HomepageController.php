<?php

$v_Data = array();

$lspBUS = new BUS\LoaiSanPhamBUS();
$spBUS  = new BUS\SanPhamBUS();
$nsxBUS = new BUS\NhaSanXuatBUS();

$limit = 10;
$page = empty($_GET['page'])?1:$_GET['page'];

$spBUS->readAllVail();
$amountPage = $spBUS->countPage($limit);


$v_Data['lstLoaiSanPham'] = $lspBUS->getAllAvailable();
$v_Data['lstSanPham']     = $spBUS->getDataLimit($page,$limit);
$v_Data['page']           = array('pageNow'=>$page,'amountPage'=>$amountPage);
$v_Data['lstNSX']         = $nsxBUS->getAllAvailable();


View('page/homepage',$v_Data); 