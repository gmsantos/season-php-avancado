<?php

require_once 'Magic.php';

// Construct
$magica = new Magic;

// Set
$magica->myProperty = 'Teste';
$magica->property2 = 'Outra';

// Get
echo $magica->myProperty;
echo $magica->property2;

// isset
var_dump(isset($magica->myProperty));

unset($magica->myProperty);

// Call
//echo $magica->metodoQualquer('teste') . PHP_EOL;
echo $magica->getMyProperty();

$magica->setMyProperty('Outra coisa diferente');
echo $magica->getMyProperty();

// Call static
echo Magic::algumaCoisa('Teste');

// toString
echo $magica;

// invoke - Usar um objeto como função
echo $magica();

// Destruct
unset($magica);