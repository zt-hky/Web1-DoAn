<?php
/**
 * Created by PhpStorm.
 * User: Zungtaz
 * Date: 12/9/2018
 * Time: 8:37 PM
 */

namespace DAO;
use DTO;

class SanPhamDAO extends DB
{

    private function ExcManyRow($sql)
    {
        $result = $this->ExcuteQuery($sql);
        $lstSanPham = array();
        while($row = mysqli_fetch_array($result))
        {
            $SanPham = new DTO\SanPham();
            $SanPham->readRow($row);
            $lstSanPham[] = $SanPham;
        }
        return $lstSanPham;
    }

    public function getAll()
    {
        $sql = "SELECT idSanPham, TenSP, Gia, SLXem,SLBan,MoTa,XuatXu, LinkURL, idLoaiSanPham, idNSX, Time, Deleted FROM SANPHAM";
        return $this->ExcManyRow($sql);
    }

    public function getAvailLimit($begin, $limit)
    {
        $sql = "SELECT `idSanPham`, `TenSP`, `Gia`, `SLXem`, `SLBan`, `MoTa`, `XuatXu`, `LinkURL`, `idLoaiSanPham`, `idNSX`, `Time`, `Deleted`, `Sex`, `Img`";
        $sql = $sql."FROM `SANPHAM`";
        $sql = $sql."WHERE `Deleted` = 0";
        $sql = $sql."LIMIT $begin, $limit";
        return $this->ExcManyRow($sql);
    }

    public function getByID($id)
    {
        $sql = "SELECT idSanPham, TenSP, Gia, SLXem,SLBan,MoTa,XuatXu, LinkURL, idLoaiSanPham, idNSX, Time, Deleted FROM SANPHAM WHERE idSanPham = $id";
        $result = $this->ExcuteQuery($sql);
        $row = mysqli_fetch_array($result);
        $SanPham = new DTO\SanPham();
        $SanPham->readRow($row);
        return $SanPham;
    }
}


