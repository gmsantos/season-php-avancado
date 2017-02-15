<?php

session_start();

echo $_SESSION['user_id']->teste;

$obj = new stdClass;
$obj->teste = 123;

$_SESSION['user_id'] = $obj;   
$_SESSION['user_nome'] = 'Cristiano';

session_regenerate_id();

echo 'batata';



