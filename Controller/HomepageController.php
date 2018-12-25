<?php

$v_Data = array();

$lspBUS = new BUS\LoaiSanPhamBUS();
$spBUS  = new BUS\SanPhamBUS();

$v_Data['lstLoaiSanPham'] = $lspBUS->getAllAvailable();



View('page/homepage',$v_Data);