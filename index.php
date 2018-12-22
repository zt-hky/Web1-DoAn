<?php

require_once "autoload.php";

echo "<pre>";
print_r ($config);


$Bus = new BUS\SanPhamBUS();

$s = $Bus->getAll();



print_r($s);


echo "</pre>";