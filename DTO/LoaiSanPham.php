<?php


namespace DTO;

class LoaiSanPham 
{
    var $idLoaiSanPham;
    var $TenLoai;
    var $Deleted;
    public function __construct()
    {
        $this->idLoaiSanPham = 0;
        $this->TenLoai       = "";
        $this->Deleted       = false;
    }

    public function readRow($row)
    {
        $this->idLoaiSanPham = $row["idLoaiSanPham"];
        $this->TenLoai       = $row["TenLoai"];
        $this->Deleted       = $row["Deleted"];
    }
}