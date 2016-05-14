<?php

interface minhaInterface{
    public function test();
}

interface minhaNovaInterface extends minhaInterface{
    public function test2();
}


class myClass implements minhaNovaInterface{
    
    public function test()
    {
        return 'meu Teste';
    }
    
    public function test2()
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