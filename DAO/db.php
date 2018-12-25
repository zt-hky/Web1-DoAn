<?php
/**
 * Created by PhpStorm.
 * User: Zungtaz
 * Date: 12/9/2018
 * Time: 8:37 PM
 */

namespace DAO;


class DB
{
    
    var $db_host;
    var $db_dbName;
    var $db_user; 
    var $db_password;
    
    public function __construct()
    {
        GLOBAl $__gCONFIG;
        $CONFIG = $__gCONFIG;
        $this->db_host = $CONFIG["db_host"];
        $this->db_dbName = $CONFIG["db_name"];
        $this->db_user = $CONFIG["db_user"];
        $this->db_password = $CONFIG["db_password"];
    }

    public function ExcuteQuery($sql)
    {
        $connect = mysqli_connect($this->db_host,$this->db_user,$this->db_password,$this->db_dbName) or die ("Cannot connect to Database");
        mysqli_set_charset($connect,"utf8");
        $result = mysqli_query($connect,$sql);
        mysqli_close($connect);
        return $result;
    }
}