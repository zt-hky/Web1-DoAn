<?php 

namespace DAO;
use DTO;

class AdminDAO extends DB
{

    private function Exc($sql)
    {
        $result = $this->ExcuteQuery($sql);
        $lstAdmin = array();
        while($row = mysqli_fetch_array($result))
        {
            $Admin = new DTO\Admin();
            $Admin->readRow($row);
            $lstAdmin[] = $Admin;
        }
        return $lstAdmin;
    }

    public function getAll()
    {
        $sql = "SELECT `user`, `password`, `fullName` FROM `ADMIN`";
        return $this->Exc($sql);
    }
}