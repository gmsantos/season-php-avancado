<?php

namespace Season\Telefonia\Traits;

trait CanDial
{
    protected $lastDial;
    
    public function call($numero)
    {
        $this->lastDial = $numero;
        
        return 'Discando p número:' . $numero;
    }
    
    public function redial()
    {
        if ($this->lastDial) {
            return 'Rediscando para ' . $this->lastDial;
        }
        
        return 'Nenhum numero discado';
    }
}
