<?php 

namespace DAO;
use DTO;

class LoaiSanPhamDAO extends DB
{
    private function ExcManyRow($sql)
    {
        $result = $this->ExcuteQuery($sql);
        $lstLoaiSanPham = array();
        while($row = mysqli_fetch_array($result))
        {
            $LoaiSanPham = new DTO\LoaiSanPham();
            $LoaiSanPham->readRow($row);
            $lstLoaiSanPham[] = $LoaiSanPham;
        }
        return $lstLoaiSanPham;
    }
    public function getAll()
    {
        $sql = "SELECT `idLoaiSanPham`, `TenLoai`, `Deleted`, `Img` FROM `LOAISANPHAM`";
        return $this->ExcManyRow($sql);
    }
}