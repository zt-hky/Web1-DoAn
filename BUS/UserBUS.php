<?php

namespace BUS;
use DTO;
use DAO;

class UserBUS
{
    var $UserDAo;

    public function __construct()
    {
        $this->UserDAO = new DAO\UserDAO;
    }

    public function CheckLogin($user, $pass)
    {
        $user = $this->UserDAO->getUser($user)[0];
        $hash = password_hash($pass, PASSWORD_DEFAULT);


        if (password_verify($pass, $user->Password))
        {
            return $user->id;
        }
        else
        {
            return false;
        }
    }

}