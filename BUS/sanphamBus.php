<?php

namespace BUS;
use DTO;
use DAO;



class SanPhamBUS
{
    var $SanPhamDAO;

    public function __construct()
    {
        $this->SanPhamDAO = new DAO\SanPhamDAO;
    }

    public function getAll()
    {
       return $this->SanPhamDAO->getAll(); 
    }

    public function getAvailLimit($page,$limit)
    {
        $begin = ($page-1)*$limit;
        return $this->SanPhamDAO->getAvailLimit($begin,$limit);
    }
}



