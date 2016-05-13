<?php

 class Animal{
     
        public $raca;
        public $nome;
        public $especie;
        
        public function __construct($nome)
        {
            $this->nome = $nome;
        }
    
        public function especie($especie)
        {
            //////voa ,nada....
            $this->especie = $especie;
            return "essa especie de animal $espcie";
        }    
        public function comida($raca)
        {
            /////herbivoro or  carnivoro
            $this->raca = $raca;
            return "esse animal $raca";
        }
    }    
    
   
    class Pato extends Animal
    { }
    
    
    $a = new Animal('Girafa');
    
    $a->especie('Mamifero');
    $a->especie = 'Mamifero';