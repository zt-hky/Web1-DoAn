<?php


if(isset($_SESSION['user']))
{
    view('page/logged');
    return;
}


if($_POST['btn_submit'])
{
    $UserBUS = new BUS\UserBUS();
    
    $username = $_POST['username'];
    $password = $_POST['password'];


    $id = $UserBUS->CheckLogin($username, $password);
    
    if($id == false)
    {
        view('page/login',array('status'=>1));
    }
    else
    {
        $_SESSION['user'] = $id;
        view('page/loginSuccess');
        return;
    }


    return;
}
view('page/login',array('status'=>0));
