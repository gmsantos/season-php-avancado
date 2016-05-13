<?php

class Base 
{
    private $var = 1;
    
    public function exibeVar()
    {
        return $this->var;
    }   
}

class Derivada extends Base
{
    
    public function exibeVar()
    {
        return parent::$var;
    }
}

$c = new Derivada();
echo $c->exibeVar();
