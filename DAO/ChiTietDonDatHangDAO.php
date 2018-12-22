<?php 

namespace DAO;
use DTO;

class ChiTietDonDatHangDAO extends DB
{

    private function Exc($sql)
    {
        $result = $this->ExcuteQuery($sql);
        $lstCTDDH = array();
        while($row = mysqli_fetch_array($result))
        {
            $CTDDH = new DTO\ChiTietDonDatHang();
            $CTDDH->readRow($row);
            $lstCTDDH[] = $CTDDH;
        }
        return $lstCTDDH;
    }

    public function getAll()
    {
        $sql = "SELECT `STT`, `SoLuong`, `idGioHang`, `idSanPham`, `Gia` FROM `CHITIETDONDATHANG`";
        return $this->Exc($sql);
    }



}