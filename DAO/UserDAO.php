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

    public function Insert($user)
    {
        #print_r($user);
        $sql = "INSERT INTO `USER`(`UserName`, `FullName`, `Password`, `DateBirth`, `idCity`, `Email`) ";
        $sql .= "VALUES ('$user->UserName','$user->FullName','$user->Password','$user->DateBirth','$user->idCity','$user->Email')";
        return $this->ExcuteQuery($sql);
    }

    public function getUser($user)
    {
        $sql = "SELECT `id`, `UserName`, `FullName`, `Password`, `DateBirth`, `idCity`, `Email`";
        $sql .= "FROM `USER` WHERE `UserName` = '$user'";
        return $this->ExcManyRow($sql);
    }

    public function getId($id)
    {
        $sql = "SELECT `id`, `UserName`, `FullName`, `Password`, `DateBirth`, `idCity`, `Email`";
        $sql .= "FROM `USER` WHERE `id` = '$id'";
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