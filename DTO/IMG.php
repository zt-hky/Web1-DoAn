<?php


namespace DTO;

class IMG 
{
    var $idSanPham;
    var $STT;
    var $url;


    public function __construct()
    {
        $this->idSanPham = 0;
        $this->STT       = 0;
        $this->url       = "";
        
    }

    public function readRow($row)
    {
        $this->idSanPham = $row["idSanPham"];
        $this->STT       = $row["STT"];
        $this->url       = $row["url"];
    }
}