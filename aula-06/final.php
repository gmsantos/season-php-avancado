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

    public function exibeVar()
    {
        return 'MAHUMAHUMAHUAMUHA Sobreescrevi seu metódo';
    } 

}

$c = new Derivada();
echo $c->exibeVar();
