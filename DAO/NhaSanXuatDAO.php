<?php 

namespace DAO;
use DTO;

class NhaSanXuatDAO extends DB
{
    public function getAll()
    {
        $sql = "SELECT `idNSX`, `TenNSX`, `Deleted` FROM `NHASANXUAT`";
        $result = $this->ExcuteQuery($sql);
        $lstNSX = array();
        while($row = mysqli_fetch_array($result))
        {
            $NSX = new DTO\NSX();
            $NSX->readRow($row);
            $NSX[] = $NSX;
        }
        return $lstNSX;
    }
    }
}