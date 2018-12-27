<?php


namespace BUS;
use DTO;
use DAO;

class CityBUS
{
    var $CityDAO;

    public function __construct()
    {
        $this->CityDAO = new DAO\CityDAO();
    }

    public function getAll()
    {
        return $this->CityDAO->getAll();
    }


}