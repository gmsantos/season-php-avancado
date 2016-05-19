<?php

namespace Acme;

use Xpto\BancoDeDados;

class App 
{
    public function run()
    {
        echo 'Executando Acme';
        
        $banco = new BancoDeDados;
        $banco->conect();
        
        $bancoAcme = new \Acme\BancoDeDados;
        $bancoAcme->conect();
    }    
}