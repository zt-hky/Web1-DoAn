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

    public function getIdUrl($url)
    {
        
        $lstLSP = $this->LoaiSanPhamDAO->getfUrl($url);
     
        if(count($lstLSP) > 0)
        {
            return $lstLSP[0]->idLoaiSanPham;
        }
        else
        {
            return false;
        }
    }
}
