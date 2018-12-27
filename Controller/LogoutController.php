<?php

session_unset(); 
session_destroy(); 

return view('page/logout');