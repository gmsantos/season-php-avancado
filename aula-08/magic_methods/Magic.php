<?php

/**
 * Métodos Mágicos
 */
class Magic 
{
    protected $myProperty;
    
    protected $property2;    
    
    public function __construct()
    {
        echo 'Classe instanciada' . PHP_EOL;
    }
    
    public function __destruct()
    {
        echo 'Bye Bye' . PHP_EOL;
    }
    
    // Para Propriedades
    public function __set($name, $value)
    {
        $this->$name = strtoupper($value);
    }
    
    public function __get($name)
    {
        return $this->$name . PHP_EOL;
    }
    
    public function __isset($name)
    {
        return false;
    }
    
    public function __unset($name)
    {
        $this->$name = 'Padrão';
    }
    
    
    // Para Métodos
    public function __call($name, $args)
    {
        if (substr($name, 0, 3) === 'get'){
            $propriedade = lcfirst(substr($name, 3));
            
            return $this->$propriedade . PHP_EOL;
        }
        
        if (substr($name, 0, 3) === 'set'){
            $propriedade = lcfirst(substr($name, 3));
            
            return $this->$propriedade = $args[0];
        }
        
        return 'Método Inválido';
    }
    
    public function __callStatic($name, $args)
    {
        return 'Sou o método estático ' . $name . ' : ' . implode(',', $args) . PHP_EOL;
    }
    
    // Para echo
    public function __toString()
    {
        return $this->myProperty . ' ' . $this->property2 . PHP_EOL;
    }
    
    // Para executar como função
    public function __invoke()
    {
        return 'alguma função' . PHP_EOL;
    }
}
