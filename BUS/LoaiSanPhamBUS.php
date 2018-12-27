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

    public function getAllAvailable()
    {
        return $this->LoaiSanPhamDAO->getAllAvailable();
    }
    public function getdatabyid($id)
    {
      
        return $this->LoaiSanPhamDAO->getdatabyid($id);
    }
}