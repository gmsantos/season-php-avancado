<?php

require_once 'Product.php';
require_once 'Modelo.php';
require_once 'Fabricante.php';
require_once 'FabricanteLocal.php';

echo '<pre>';

$fabricante = new Fabricante('LG');

$modelo = new Modelo('teste', $fabricante);
$modelo->name = 'Controle';
$modelo->setPrice(50);

echo $modelo->showInfo();

echo $modelo->vendaOnline() . '<br>';

var_dump($modelo);

$modelo->tipo_modelo = Product::TIPO_VENDA_FISICA;
echo $modelo->vendaOnline(). '<br>';
var_dump($modelo);

$modelo->dimensoes();

echo $modelo->getNomeFabricante();
