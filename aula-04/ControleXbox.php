<?php

class ControleXbox
{
	public $pilhas;
	public $cor;
	public $modelo;
	public $energia = 0;
	
	public function __construct($pilhas, $cor, $modelo)
	{
		if (empty($pilhas) || empty($cor) || empty($modelo)) {
			throw new Exception('Dados incorretos');
		}
		
		$this->pilhas = $pilhas;
		$this->cor = $cor;
		$this->modelo = $modelo;
	}
	
	public function ligar()
	{
		// rotina interna
		
		return $this->energia = 100;
	}
	
	public function desligar()
	{
		// rotina interna
		
		return $this->energia = 0;
	}
	
	public function interagir($botao)
	{
		if ($this->energia > 0) {
			return "Você clicou no botão $botao";
		} else {
			throw new Exception('O controle não está ligado...');
		}
	}
}
