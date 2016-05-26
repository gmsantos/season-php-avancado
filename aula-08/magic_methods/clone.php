<?php

require_once 'Magic.php';

$magica = new Magic();

$magica2 = $magica;

$magica->myProperty = 'teste';

echo $magica2->myProperty;

$magica2 = clone $magica;

$magica2->myProperty = 'clone';

var_dump($magica);
var_dump($magica2);

