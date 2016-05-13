<?php 

class Fabricante
{
    protected $nome;
    
    public function __construct($nome)
    {
        $this->nome = $nome;
    }
    
    public function getNomeFabricante()
    {
        return $this->nome;
    }
}