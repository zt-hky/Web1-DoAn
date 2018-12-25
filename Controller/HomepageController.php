<?php

$v_Data = array();

$lspBUS = new BUS\LoaiSanPhamBUS();
$spBUS  = new BUS\SanPhamBUS();

$limit = 20;
$page = empty($_GET['page'])?1:$_GET['page'];

$v_Data['lstLoaiSanPham'] = $lspBUS->getAllAvailable();
$v_Data['lstSanPham']     = $spBUS->getAvailLimit($page,$limit);


View('page/homepage',$v_Data);