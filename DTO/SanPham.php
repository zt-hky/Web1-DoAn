<?php
/**
 * Created by PhpStorm.
 * User: Zungtaz
 * Date: 12/9/2018
 * Time: 9:23 PM
 */

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
    public function __construct()
    {
        $this->idSanPham = 0;
        $this->TenSp = "";
        $this->Gia = 0;
        $this->SLXem = 0;
        $this->SLBan = 0;
        $this->MoTa = "";
        $this->XuatXu = "";
        $this->LinkURL = "";
        $this->idLoaiSanPham = 0;
        $this->idNSX = 0;
        $this->Time;

    }
}   