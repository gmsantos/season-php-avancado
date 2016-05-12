<?php

require_once "Celular.php";

$celular = new Celular(null);

var_dump($celular);

//$celular->numero = 90909090;

//var_dump($celular->numero);

echo $celular->fazerLigacao(70707070);

unset($celular);

echo '<br>Teste123<br>';