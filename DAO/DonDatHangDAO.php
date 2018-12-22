<?php 

namespace DAO;
use DTO;

class DonDatHangDAO extends DB
{
    private function Exc($sql)
    {
        $result = $this->ExcuteQuery($sql);
        $lstDDH = array();
        while($row = mysqli_fetch_array($result))
        {
            $DDH = new DTO\DTO\DonDatHang();
            $DDH->readRow($row);
            $lstDDH[] = $LoaiSanPham;
        }
        return $lstDDH;
    }



    public function getAll()
    {
        $sql = "SELECT `idGioHang`, `TrangThai`, `idUser`, `Time` FROM `DONDATHANG`";
        return $this->Exc($sql);
    }
}