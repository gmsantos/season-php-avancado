<?php

interface TimeFutebol{
    public function contratarJogador(Jogador $jogador);
    public function jogarPartida(TimeFutebol $adversario);
    public function prepararEscalacao();
}

class Time implements TimeFutebol{
    
}

class Jogador {
    
    protected $nome;
    
    public function __construct($nome)
    {
        $this->nome = $nome;
    }
}