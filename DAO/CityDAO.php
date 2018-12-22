<?php 

namespace DAO;
use DTO;

class CityDAO  extends DB
{

    public function getAll()
    {
        $sql = "SELECT `idCITY`, `NameCity` FROM `CITY`";
        $result = $this->ExcuteQuery($sql);
        $lstCity = array();
        while($row = mysqli_fetch_array($result))
        {
            $City = new DTO\City();
            $City->readRow($row);
            $lstCity[] = $City;
        }
        return $lstCity;
    }
    
}