<?php


namespace BUS;
use DTO;
use DAO;

class LoaiSanPhamBUS
{
    var $LoaiSanPhamDAO;

    public function __construct()
    {
        $this->LoaiSanPhamDAO = new DAO\LoaiSanPhamDAO();
    }

    public function getAll()
    {
        return $this->LoaiSanPhamDAO->getAll();
    }
}