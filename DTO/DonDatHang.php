<?php


namespace DTO;

class DonDatHang 
{
    var $idGioHang;
    var $TrangThai;
    var $idUser;
    var $Time;

    public function __construct()
    {
        $this->idGioHang     = 0;
        $this->TrangThai     = "";
        $this->idUser        = 0;
        $this->Time          = NULL; 
        
    }

    public function readRow($row)
    {
        $this->idGioHang     = $row["idGioHang"];
        $this->TrangThai     = $row["TrangThai"];
        $this->idUser        = $row["idUser"];
        $this->Time          = $row["Time"];
    }
}