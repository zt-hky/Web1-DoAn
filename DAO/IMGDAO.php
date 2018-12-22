<?php 

namespace DAO;
use DTO;

class IMGDAO  extends DB
{

    private function Exc($sql)
    {
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

    public function getAll()
    {
        $sql = "SELECT `idSanPham`, `STT`, `url` FROM `IMG`";
        return $this->Exc($sql);
    }
    }
}