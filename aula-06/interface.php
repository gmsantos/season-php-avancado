<?php

interface TimeFutebol{
    public function contratarJogador(Jogador $jogador);
    public function jogarPartida(TimeFutebol $adversario);
    public function prepararEscalacao();
}

interface TimeVolei{
    public function JogarVoleiDePraia();
}

class SPFC implements TimeFutebol, TimeVolei {
    
    protected $elenco = [
        'Rogerio Ceni'
    ];
    
    public function contratarJogador(Jogador $jogador)
    {
        
    }
    
    public function jogarPartida(TimeFutebol $adversario)
    {
        
    }
    
    public function prepararEscalacao()
    {
        return $this->elenco;
    }
    
    public function JogarVoleiDePraia()
    {
        
    }
    
}

class Santos implements TimeFutebol {
    
    public $time = [
        'Robinho'
    ];
    
    public function contratarJogador(Jogador $jogador)
    {
        
    }
    
    public function jogarPartida(TimeFutebol $adversario)
    {
        
    }
    
    public function prepararEscalacao()
    {
        return $this->time;
    }
    
}


class Corinthians implements TimeFutebol
{
    public $caixa = 10000;
    protected $time = [
        'Cássio',
        'Fagner'
    ];
    
    public function contratarJogador(Jogador $jogador) 
    {
        if ($this->caixa >= $jogador->valor) {
            $this->caixa -= $jogador->valor;
            
            $this->time[] = $jogador->nome;
            return $jogador->nome . ' foi contratado!';
        }
    }
    
    public function jogarPartida(TimeFutebol $adversario)
    {
        if (get_class($adversario) == 'SPFC') {
            echo 'Jogar com time reserva';
        }
        
        print_r($this->prepararEscalacao());
        print_r($adversario->prepararEscalacao());
        
        return 'Corinthians joga contra ' . get_class($adversario);
    }
    
    public function prepararEscalacao()
    {
        return $this->time;
    }
}

class Jogador {
    public $nome;
    public $valor;
    
    public function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

$jogador = new Jogador('Tevez', 500);

$timao = new Corinthians();
$timao->contratarJogador($jogador) . '<br />';
echo $timao->caixa . '<br />';
echo get_class($timao);

$santos = new Santos;
$spfc = new SPFC;

echo $timao->jogarPartida($spfc) . '<br />';
echo $timao->jogarPartida($santos) . '<br />';

