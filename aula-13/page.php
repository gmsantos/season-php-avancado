<?php

session_start();  

if (! isset($_SESSION['user_nome'])){
    die('Usuario não está logado');
}

echo 'Voce esta logago como ' . $_SESSION['user_nome'];

if ($_SESSION['user_id']==1){ 
    echo 'Login administrador ';
} else {
    echo 'usuario comun';
}