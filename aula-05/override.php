<?php

class Base 
{
    protected $var = 1;
    
    public function exibeVar()
    {
        return $this->var;
    }   
}

class Derivada extends Base
{
    public $var = 2;

    public function exibeVar()
    {
        return $this->var;
    }   

}

$c = new Derivada();
echo $c->exibeVar('teste');
