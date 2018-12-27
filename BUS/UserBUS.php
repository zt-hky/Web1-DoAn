<?php

namespace BUS;
use DTO;
use DAO;

class UserBUS
{
    var $UserDAO;

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
            return $user->UserName;
        }
        else
        {
            return false;
        }
    }

    public function SignUp($UserName,$Password,$DateBirth,$idCity,$FullName)
    {
        if(count($this->UserDAO->getUser($UserName)) >= 1 )
        {
            return false;
        }
        
        $User = new DTO\User();

        
        $User->UserName = $UserName ;
        $User->Password = password_hash($Password, PASSWORD_DEFAULT);  
        $User->DateBirth =$DateBirth ;
        $User->idCity =$idCity ;
        $User->FullName = $FullName;
      

        $this->UserDAO->Insert($User);
        return true;
    }

}