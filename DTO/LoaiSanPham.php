<?php


namespace DTO;

class LoaiSanPham 
{
    var $idLoaiSanPham;
    var $TenLoai;
    var $Deleted;
    var $Img;
    var $Url;
    
    public function __construct()
    {
        $this->idLoaiSanPham = 0;
        $this->TenLoai       = "";
        $this->Deleted       = false;
        $this->Img           = "";
        $this->Url           = "";
    }

    public function readRow($row)
    {
        $this->idLoaiSanPham = $row["idLoaiSanPham"];
        $this->TenLoai       = $row["TenLoai"];
        $this->Deleted       = $row["Deleted"];
        $this->Img           = $row["Img"];
        $this->Url           = $row["Url"];
    }
}