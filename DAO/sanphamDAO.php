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
    public function GetAll()
    {
        $sql = "SELECT idSanPham, TenSP, Gia, SLXem,SLBan,MoTa,XuatXu, LinkURL, idLoaiSanPham, idNSX, Time, Deleted FROM SANPHAM";
        $result = $this->ExcuteQuery($sql);
        while($row = mysqli_fetch_array($result))
        {
            $SanPham = new DTO\SanPham();
            $SanPham->idSanPham = $row["idSanPham"];
            $SanPham->TenSP = $row["TenSP"];
            $SanPham->Gia = $row["Gia"];
            $SanPham->SLXem = $row["SLXem"];
            $SanPham->SLBan = $row["SLBan"];
            $SanPham->MoTa = $row["MoTa"]; 
            $SanPham->XuatXu = $row["XuatXu"];
            $SanPham->LinkURL = $row["LinkURL"];
            $SanPham->idLoaiSanPham = $row["idLoaiSanPham"];
            $SanPham->idNSX = $row["idNSX"];
            $SanPham->Time = $row["Time"];
            $SanPham->Deleted = $row["Deleted"];
        }
    }
}


