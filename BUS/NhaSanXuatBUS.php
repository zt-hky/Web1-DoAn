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
}