<?php 

namespace DAO;
use DTO;

class IMGDAO  extends DB
{

    private function ExcManyRow($sql)
    {
        $result = $this->ExcuteQuery($sql);
        $lstIMG = array();
        while($row = mysqli_fetch_array($result))
        {
            $IMG = new DTO\IMG();
            $IMG->readRow($row);
            $lstIMG[] = $IMG;
        }
        return $lstIMG;
    }

    public function getAll()
    {
        $sql = "SELECT `idSanPham`, `STT`, `url` FROM `IMG`";
        return $this->ExcManyRow($sql);
    }
}