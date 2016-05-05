<?php

function testeStatic()
{
    static $a;
    
    if (!isset($a)){
        $a = 1;
        echo 'executou';
    }
    
     return $a;
}


echo testeStatic();
echo '<br>';
echo testeStatic();
echo '<br>';
echo testeStatic();
echo '<br>';
echo testeStatic();