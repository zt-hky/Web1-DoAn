<?php

namespace DTO;

class Admin
{
    var $user;
    var $password;
    var $fullName;

    public function __construct()
    {
        $this->user     = "";
        $this->password = "";
        $this->fullName = "";
    }

    public function readRow($row)
    {
        $this->user     = $row["user"];
        $this->password = $row["password"];
        $this->fullName = $row["fullName"];
    }

}