<?php
session_start();

$bancoFake = [
	[
		'login' => 'admin',
		'senha' => '123456',
		'nome' => 'Chuck Norris'
	],
	
	[
		'login' => 'usuario',
		'senha' => '654321',
		'nome' => 'Legal'
	],
	
];

if (isset($_GET['sair'])) {
	session_destroy();
}

if (isset($_POST['login'])) {
	foreach ($bancoFake as $usuario) {
		if ($usuario['login'] == $_POST['login'] && $usuario['senha'] == $_POST['senha']) {
            $_SESSION['login'] = $_POST['login'];
			$_SESSION['passou'] = true;
		}
	}
}

if (!isset($_SESSION['passou'])) {
	$_SESSION['mensagem'] = 'Nada disso...';
	header('Location: index.php');
}
?>

Deu certo!!! <a href="?sair">Clique aqui para sair</a>
