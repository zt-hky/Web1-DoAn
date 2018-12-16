<?php

namespace DTO;


class ChiTietDonHang
{
    var $STT; 
    var $SoLuong;
    var $idGioHang;
    var $idSanPham; 
    var $Gia;
    public function __construct()
    {
        $this->STT          = 0; 
        $this->SoLuong      = 0;
        $this->idGioHang    = 0;
        $this->idSanPham    = 0; 
        $this->Gia          = 0;  
    }
    public function readRow($row)
    {
        $this->STT          = $row["STT"]; 
        $this->SoLuong      = $row["SoLuong"];
        $this->idGioHang    = $row["idGioHang"];
        $this->idSanPham    = $row["idSanPham"]; 
        $this->Gia          = $row["Gia"];
    }
}