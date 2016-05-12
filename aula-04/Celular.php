<?php

class Celular {
    
    public $tipoTelefone = 'celular';
    
    public $modelo;
    
    public $numero;
    
    public function __construct($numero)
    {
        $this->numero = $numero;
    }
    
    public function __destruct()
    {
        echo 'bye bye';
    }
    
    public function fazerLigacao($numeroDiscado)
    {
        // algumas rotinas
        
        return "Ligando para o número $numeroDiscado";
    }
    
    public function receberLigacao()
    {
        
    }
    
    public function rediscarUltimoNumero()
    {
        
    }
    
}

