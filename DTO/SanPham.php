<?php

namespace DTO;


class SanPham
{
    var $idSanPham;
    var $TenSp;
    var $Gia;
    var $SLXem;
    var $SLBan;
    var $MoTa;
    var $XuatXu;
    var $LinkURL;
    var $idLoaiSanPham;
    var $idNSX;
    var $Time;
    var $Deleted;
    var $Img;
   
    public function __construct()
    {
        $this->idSanPham     = 0;
        $this->TenSp         = "";
        $this->Gia           = 0;
        $this->SLXem         = 0;
        $this->SLBan         = 0;
        $this->MoTa          = "";
        $this->XuatXu        = "";
        $this->LinkURL       = "";
        $this->idLoaiSanPham = 0;
        $this->idNSX         = 0;
        $this->Time;
        $this->Img = "";
    }

    public function readRow($row)
    {
        $this->idSanPham     = $row["idSanPham"];
        $this->TenSP         = $row["TenSP"];
        $this->Gia           = $row["Gia"];
        $this->SLXem         = $row["SLXem"];
        $this->SLBan         = $row["SLBan"];
        $this->MoTa          = $row["MoTa"]; 
        $this->XuatXu        = $row["XuatXu"];
        $this->LinkURL       = $row["LinkURL"];
        $this->idLoaiSanPham = $row["idLoaiSanPham"];
        $this->idNSX         = $row["idNSX"];
        $this->Time          = $row["Time"];
        $this->Deleted       = $row["Deleted"];
        $this->Img           = $row["Img"];
    }
}   