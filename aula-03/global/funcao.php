<?php

$a = 10;
$b = 20;
$c = 40;

function funcao()
{
    global $c;
    
    
    $GLOBALS['a'] = 'teste';
    
    
}

echo $a;
echo '<br>';

funcao();
echo '<br>';

echo $a;
echo '<br>';