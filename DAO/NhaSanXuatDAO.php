<?php 

namespace DAO;
use DTO;

class NhaSanXuatDAO extends DB
{

    private function ExcManyRow($sql)
    {
        $result = $this->ExcuteQuery($sql);
        $lstNSX = array();


        while($row = mysqli_fetch_array($result))
        {
            $NSX = new DTO\NhaSanXuat();
            $NSX->readRow($row);
            $lstNSX[] = $NSX;
        }
        return $lstNSX;
    }

    public function getfUrl($Url)
    {
        $sql = "SELECT `idNSX`, `TenNSX`, `Deleted` , `Url` FROM `NHASANXUAT` WHERE `Url` = '$Url'";
        return $this->ExcManyRow($sql);
    }

    public function getAll()
    {
        $sql = "SELECT `idNSX`, `TenNSX`, `Deleted` , `Url` FROM `NHASANXUAT`";
        return $this->ExcManyRow($sql);
    }

    public function getAllAvailable(Type $var = null)
    {
        $sql = "SELECT `idNSX`, `TenNSX`, `Deleted` , `Url` FROM `NHASANXUAT` WHERE `Deleted` = 0";
        return $this->ExcManyRow($sql);
    }
    
}