<?php

// Descontinuado!! não use
// ereg_*()
//ereg_replace();

// Ok
// Padrão POSIX
//preg_match();

$string = '1231  123';

var_dump(preg_match('/[a-zA-Z]/', $string));

// Lembre-se que preg_match retorna 1 ou 0
// e somente false em erro na regex
if(false !== preg_match('/[a-zA-Z]/', $string)){
    echo 'Encontrou!';
}

// Retorna somente a primeira ocorrencia
$string = 'Teste 123 ABC';
preg_match('/[a-zA-Z]/', $string, $matches);

var_dump($matches);

$string = 'Teste 123 ABC';
preg_match('/(a-zA-Z)(a-zA-Z)/', $string, $matches, PREG_OFFSET_CAPTURE);

var_dump($matches);

