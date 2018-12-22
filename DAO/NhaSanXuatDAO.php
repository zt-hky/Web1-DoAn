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

    public function getAll()
    {
        $sql = "SELECT `idNSX`, `TenNSX`, `Deleted` FROM `NHASANXUAT`";
        return $this->ExcManyRow($sql);
    }
    
}