<?php



include_once "DAO\DB.php";
include_once "DAO\LoaiSanPhamDAO.php";
include_once "DTO\LoaiSanPham.php";


echo "<pre>";
print_r ($config);


$Bus = new DAO\LoaiSanPhamDAO();

$s = $Bus->getAll();

echo "---------------\n";

print_r($s);


echo "</pre>";