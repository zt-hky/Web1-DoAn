<?php
/**
 * Created by PhpStorm.
 * User: Zungtaz
 * Date: 12/9/2018
 * Time: 8:37 PM
 */

namespace DAO;


class SanPhamDAO extends DB
{
    public function getAll()
    {
        $sql = "SELECT idSanPham, TenSP, Gia, SLXem,SLBan,MoTa,XuatXu, LinkURL, idLoaiSanPham, idNSX, Time, Deleted FROM SANPHAM";
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


