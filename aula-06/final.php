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
    private $var = 2;

}

$c = new Derivada();
echo $c->exibeVar();
