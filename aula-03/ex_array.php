<?php

// Considere o array

$var = [ 
   '100' => 1,
   3,
   "b" => 4,
   2 
];

var_dump($var);

/*
O que precisamos alterar no codigo acima para produzir a seguinte saída?

array(4) {
  [2]=>  int(1)
  [3]=>  int(3)
  ["b"]=>  int(4)
  [4]=>  int(2)
}

*/