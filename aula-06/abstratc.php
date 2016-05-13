<?php

abstract class Base 
{
    public $var = 1;
    
    public function exibeVar()
    {
        return $this->var;
    }   
}

class Derivada extends Base
{
    public $var = 2;

}

abstract class Animal {
    
    protected $nome;
    
    public function __construct($nome)
    {
        $this->nome = $nome;
    }
    
    public function getNome()
    {
        return $this->nome;
    }
    
    abstract public function alimentacao();
}

class Pato extends Animal 
{
    public function alimentacao()
    {
        return 'Ração e Milho';
    }
}

class Abelha extends Animal 
{
    public function alimentacao()
    {
        return 'produz proprio alimento';
    }
}

$abelha = new Abelha('Doida');

echo get_class($abelha) . ' ' . $abelha->getNome() . '<br />';
echo $abelha->alimentacao() . '<br />';

/* 
$c = new Derivada();
echo $c->exibeVar();
*/

$pato = new Pato('patolino');
echo $pato->getNome();
echo $pato->alimentacao();
