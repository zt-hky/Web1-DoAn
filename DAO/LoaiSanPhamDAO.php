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
   
    public function getAllAvailable(Type $var = null)
    {
        $sql = "SELECT `idLoaiSanPham`, `TenLoai`, `Deleted`, `Img` FROM `LOAISANPHAM` WHERE `Deleted` = 0";
        return $this->ExcManyRow($sql);
    }


    public function getAll()
    {
        $sql = "SELECT `idLoaiSanPham`, `TenLoai`, `Deleted`, `Img` FROM `LOAISANPHAM`";
        return $this->ExcManyRow($sql);
    }
    public function getdatabyid($id)
    {
       
        $sql = "SELECT `idLoaiSanPham`, `TenLoai`, `Deleted`, `Img` FROM `LOAISANPHAM` WHERE `idLoaiSanPham` = $id" ;
        $result = $this->ExcuteQuery($sql);
       
        $row = mysqli_fetch_array($result);
      
        $LoaiSanPham = new DTO\LoaiSanPham();
        $LoaiSanPham->readRow($row);    
        return  $LoaiSanPham;
    
    }
}