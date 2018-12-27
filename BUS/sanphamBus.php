<?php

namespace BUS;
use DTO;
use DAO;



class SanPhamBUS
{
    var $SanPhamDAO;
    var $Data;

    public function __construct()
    {
        $this->SanPhamDAO = new DAO\SanPhamDAO;
        $this->Data =array();
    }

    public function getData()
    {
        return $this->SanPhamDAO->getAll();
    }

    public function readAll()
    {
        $this->Data = $this->SanPhamDAO->getAll();

    }

    public function readVailNSX($idNSX)
    {
        $this->Data = $this->SanPhamDAO->getVailNSX($idNSX);
    }

    public function readAllVail()
    {
        $this->Data = $this->SanPhamDAO->getAllVail();
    }

    public function countData()
    {
        return count($this->Data);
    }

    public function countPage($limit)
    {
        return ceil($this->CountData()/$limit);
    }
    
    public function getDataLimit($page,$limit)
    {

        $begin = ($page-1)*$limit;
        return array_slice($this->Data,$begin,$limit);
    }

    public function getAll()
    {
       return $this->SanPhamDAO->getAll(); 
    }
    public function countPageVail($limit)
    {
        return ceil($this->SanPhamDAO->countVail()/$limit);
    }
    public function getAvailLimit($page,$limit)
    {
        $begin = ($page-1)*$limit;
        return $this->SanPhamDAO->getAvailLimit($begin,$limit);
    }
    public function getByNSX($idNSX)
    {
        return $this->SanPhamDAO->getByNSX($idNSX);
    }
    public function getbyID($idSP)
    {
        return $this->SanPhamDAO->getByID($idSP);
        
    }
    public function getSPlquan($idSP)
    {
       $this->Data=$this->SanPhamDAO->getSPlquan($idSP);
        
    }
    
    public function readVailLSP($idLSP)
    {
        $this->Data= $this->SanPhamDAO->getSPLSP($idLSP);
    }
  
}



