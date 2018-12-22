<?php 

namespace DAO;
use DTO;

class  extends DB
{
    public function getAll()
    {
        $sql = "";
        $result = $this->ExcuteQuery($sql);
        $lstAdmin = array();
        while($row = mysqli_fetch_array($result))
        {
            $Admin = new DTO\Admin();
            $Admin->readRow($row);
            $lstAdmin[] = $LoaiSanPham;
        }
        return $lstAdmin;
    }
    }
}