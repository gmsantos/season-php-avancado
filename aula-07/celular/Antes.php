<?php

class Celular 
{
    use CanDial, CanEmergencyCalls;
}

class TelefoneFixo 
{
    use CanDial, CanEmergencyCalls;
}

class Voip  
{
    use CanDial;
}

$celular = new Celular;
$telefone = new TelefoneFixo;
$voip = new Voip;

echo $celular->call('7070707070') . '<br>';

echo $telefone->call('080808080') . '<br>';
echo $telefone->redial() . '<br>';

echo $celular->emercencyCall() . '<br>';

echo $voip->redial() . '<br>';

var_dump($celular, $telefone, $voip);
