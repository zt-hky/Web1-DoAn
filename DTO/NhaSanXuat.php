<?php

namespace DTO;

class NhaSanXuat
{
    var $idNSX;
    var $TenNSX;
    var $Url;

    public function __consturct(Type $var = null)
    {
        $this->idNSX     = 0;
        $this->TenNSX    = ""; 
        $this->Url       = "";
    }

    public function readRow($row)
    {
        $this->idNSX     = $row["idNSX"];
        $this->TenNSX    = $row["TenNSX"];
        $this->Url    = $row["Url"];
    }
}