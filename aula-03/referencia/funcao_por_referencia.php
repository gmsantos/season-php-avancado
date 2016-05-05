<?php

function array_upper_case(&$array){
    if (! is_array($array)) {
        return false;
    }
    
    foreach ($array as &$value) {
        $value = strtoupper($value);
    }
    
    return true;
}

$array = explode(' ', 'Treinamento de PHP Avancado Season');

var_dump(array_upper_case($array), $array);
