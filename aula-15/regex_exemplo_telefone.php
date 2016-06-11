<?php

$telefone = [
    '11935678789',
    '11 93567 8789',
    '(11) 93567-8789',
    '9987593641',
    '(99)87593641',
    '99 8759-3641',
    '(99) 8759-3641',
];

var_dump($telefone);

// 1º passo limpar a telefones
// \D - não for número, "atalho" de [^0-9]
// \d - tudo q for número [0-9]
$telefoneSomenteNumeros = preg_replace('/\D/', '', $telefone);

var_dump($telefoneSomenteNumeros); // 11993568789

preg_match('/(\d{2})(\d{4,5})(\d{4})/', $telefoneSomenteNumeros[0], $telefoneFormatado);

var_dump($telefoneFormatado);

preg_match('/(\d{2})(\d{4,5})(\d{4})/', $telefoneSomenteNumeros[5], $telefoneFormatado);

var_dump($telefoneFormatado);

// 2º formatar, atenção com nono dígito!
$telefonesFormatados = preg_replace('/(\d{2})(\d{4,5})(\d{4})/', '($1) $2-$3', $telefoneSomenteNumeros);

var_dump($telefonesFormatados); // (11) 99356-8789
