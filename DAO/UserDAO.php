<?php 

namespace DAO;
use DTO;

class UserDAO extends DB
{

    private function ExcManyRow($sql)
    {
        $result = $this->ExcuteQuery($sql);
        $lstUser = array();
        while($row = mysqli_fetch_array($result))
        {
            $User = new DTO\User();
            $User->readRow($row);
            $lstSanPham[] = $SanPham;
        }
        return $lstUser;
    }  

    public function getAll()
    {
        $sql = "SELECT `id`, `UserName`, `FullName`, `Password`, `DateBirth`, `idCity`, `Email` FROM `USER`";
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