<?php

class Product {
    
    public $name;
    protected $price;
    private $id;
    
    const TIPO_VENDA_ONLINE = 'online';
    const TIPO_VENDA_FISICA = 'fisica';
    const TIPO_VENDA_TELEFONE = 'telefone';
    
    public function __construct($id)
    {
        $this->id = $id;
        
        $this->tipo_produto = self::TIPO_VENDA_ONLINE;
    }
    
    public function showInfo()
    {
        $output = $this->name . '<br>';
        $output .= $this->price . '<br>';
        
        return $output;
    }
    
    public function setPrice($price)
    {
        $this->price = $price;
    }
    
    public function vendaOnline()
    {
        if ($this->tipo_produto === self::TIPO_VENDA_ONLINE) {
            return 'Venda pela Internet';
        } else {
            return 'Não pode vender pela internet';
        }
    }
        
}
