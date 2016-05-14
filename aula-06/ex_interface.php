<?php

interface minhaInterface{
    public function test();
}

class myClass extends minhaInterface{
    
    public function test()
    {
        return 'meu Teste';
    }
    
}

function typehint(minhaInterface $value)
{
    return $value->test();
}

$myObj = new myClass();

echo typehint($myObj);