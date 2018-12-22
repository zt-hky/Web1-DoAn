<?php

namespace DTO;

class User
{
    var $id;
    var $UserName;
    var $FullName;
    var $Password;
    var $DateBirth;
    var $idCity;
    var $Email;

    public function __consturct(Type $var = null)
    {
        $this->id        = 0;
        $this->UserName  = "";
        $this->FullName  = "";
        $this->Password  = "";
        $this->DateBirth;
        $this->idCity    = 0;
        $this->Email     = "";
    }

    public function readRow($row)
    {
        $this->id        = $row["id"];
        $this->UserName  = $row["UserName"];
        $this->FullName  = $row["FullName"];
        $this->Password  = $row["Password"];
        $this->DateBirth = $row["DateBirth"];
        $this->idCity    = $row["idCity"];
        $this->Email     = $row["Email"];
    }
}