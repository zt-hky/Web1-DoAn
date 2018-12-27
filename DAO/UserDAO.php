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
            $lstUser[] = $User;
        }
        return $lstUser;
    }  

    public function getUser($user)
    {
        $sql = "SELECT `id`, `UserName`, `FullName`, `Password`, `DateBirth`, `idCity`, `Email`";
        $sql .= "FROM `USER` WHERE `UserName` = '$user'";
        return $this->ExcManyRow($sql);
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