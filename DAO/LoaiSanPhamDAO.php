<?php 

namespace DAO;
use DTO;

class LoaiSanPhamDAO extends DB
{
    public function getAll()
    {
        $sql = "SELECT idLoaiSanPham, TenLoai, Deleted FROM LOAISANPHAM";
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
}