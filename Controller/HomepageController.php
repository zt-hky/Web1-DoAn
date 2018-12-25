<?php

$v_Data = array();

$lspBUS = new BUS\LoaiSanPhamBUS();
$spBUS  = new BUS\SanPhamBUS();

$v_Data['lstLoaiSanPham'] = $lspBUS->getAll();



View('page/homepage',$v_Data);