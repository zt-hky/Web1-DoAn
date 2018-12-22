<?php

namespace DTO;

class NhaSanXuat
{
    var $idNSX;
    var $TenNSX;

    public function __consturct(Type $var = null)
    {
        $this->idNSX     = 0;
        $this->TenNSX    = ""; 
    }

    public function readRow($row)
    {
        $this->idNSX     = $row["idNSX"];
        $this->TenNSX    = $row["TenNSX"];
    }
}