<?php

if(isset($_SESSION['user']))
{
    view('page/logged');
    return;
}


if(isset($_POST['btn_submit']))
{
    return;
}

$cityBUS = new BUS\CityBUS.php;

$listCity = $cityBUS->getAll();

$v_data = array();

$v_data['listCity'] = $listCity;

view('page/signup',$v_data);