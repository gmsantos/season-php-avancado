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
        return $this->var;
    }
}

$c = new Derivada();
$c->exibeVar();
