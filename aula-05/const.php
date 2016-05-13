<?php

require_once 'Product.php';

define('TIPO', 'PHP avançado');

echo TIPO. '<br>';

//echo Product::FORNECEDOR;

$produto = new Product(1);
$produto->name = 'Controle';
$produto->price = 512;
$produto->setPrice(50);

echo $produto->showInfo();

echo $produto->vendaOnline() . '<br>';

var_dump($produto);

$produto->tipo_produto = Product::TIPO_VENDA_FISICA;
echo $produto->vendaOnline(). '<br>';
var_dump($produto);
