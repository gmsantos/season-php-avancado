<?php

function __autoload($classname) {
    $filename = "./src/". str_replace('\\', '/', $classname) .".php";
    require_once $filename ;
}

use Season\Telefonia\Celular;
use Season\Telefonia\TelefoneFixo;
use Season\Telefonia\Voip;

$celular = new Celular;
$telefone = new TelefoneFixo;
$voip = new Voip;

echo $celular->call('7070707070') . '<br>';

echo $telefone->call('080808080') . '<br>';
echo $telefone->redial() . '<br>';

echo $celular->emercencyCall() . '<br>';

echo $voip->redial() . '<br>';

var_dump($celular, $telefone, $voip);
