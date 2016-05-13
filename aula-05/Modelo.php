<?php 

class Modelo extends Product
{
    protected $fabricante;
    
    public function __construct($marca, Fabricante $fabricante)
    {
        $this->fabricante = $fabricante;
        $this->marca = $marca;
    }
    
    public function dimensoes()
    {
        echo '3x4';
    }
    
    public function vendaOnline()
    {
        return 'Sempre vai vender online';
    }
    
    public function getNomefabricante()
    {
        return $this->fabricante->getNomefabricante();
    }
    
}