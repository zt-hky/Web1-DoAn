<?php



if(isset($_SESSION['user']))
{
    view('page/logged');
    return;
}


$cityBUS = new BUS\CityBUS();

$listCity = $cityBUS->getAll();

$v_data = array();

$v_data['listCity'] = $listCity;


if(isset($_POST['btn_submit']))
{
    $UserBUS = new BUS\UserBUS();

    $UserName     = $_POST['UserName'];          
    $Password     = $_POST['Password'];      
    $dataBirth    = $_POST['year']."-".$_POST['month']."-".$_POST['day'];       
    $idCity       = $_POST['idCity'];    
    $FullName     = $_POST['FullName'];   
    $Password2    = $_POST['Password2'];


    $InserUser = $UserBUS->SignUp($UserName,$Password,$dataBirth,$idCity,$FullName);
    if($InserUser) 
    {
        $_SESSION['user']=$UserName;
        view('page/signupSuccess');
    }
    else
    {
        echo"Tên đăng nhập bị trùng";
        return;
    }
}


view('page/signup',$v_data);

