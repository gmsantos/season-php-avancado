<?php

class Magic {

    protected $v = ['a' => 1, 'b' => 2, 'c' => 3];

    public function &__get($v)
    {
        return $this->v[$v]; 
    }
   
}

$m = new Magic();
$m->d[] = 4;

echo $m->d[0];
