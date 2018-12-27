<?php


namespace BUS;
use DTO;
use DAO;

class NhaSanXuatBUS
{
    var $NhaSanXuatDAO;

    public function __construct()
    {
        $this->NhaSanXuatDAO = new DAO\NhaSanXuatDAO();
    }

    public function getAll()
    {
        return $this->NhaSanXuatDAO->getAll();
    }

    public function getAllAvailable()
    {
        return $this->NhaSanXuatDAO->getAllAvailable();
    }

    public function getIdFURL($Url)
    {
        $lstNSX = $this->NhaSanXuatDAO->getfUrl($Url);
        if(count($lstNSX) > 0)
        {
            return $lstNSX[0]->idNSX;
        }
        else
        {
            return false;
        }
    }
    public function getdatabyid($id)
    {
        return $this->NhaSanXuatDAO->getdatabyid($id);
    }

}