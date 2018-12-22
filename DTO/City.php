<?php


namespace DTO;

class City 
{
    var $idCITY;
    var $NameCity;


    public function __construct()
    {
        $this->idCITY     = 0;
        $this->NameCity   = "";
        
    }

    public function readRow($row)
    {
        $this->idCITY     = $row["idCITY"];
        $this->NameCity   = $row["NameCity"];
    }
}