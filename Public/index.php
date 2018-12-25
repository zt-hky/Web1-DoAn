<?php
require_once('load.php');


$__gController = empty($_GET['c']) ? $__gCONFIG['CONTROLLER_DEFAULT'] : $_GET['c'];


Controller($__gController);




?>