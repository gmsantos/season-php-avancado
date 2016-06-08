<?php

session_start();
    
$id = count($_SESSION);
$id++;

$_SESSION['teste' . $id] = 'batata';

echo session_id();

session_regenerate_id();

var_dump($_SESSION);
    

