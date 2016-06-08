<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Olá, vai logar?</title>
	</head>

	<body>
		<div>
			<header>
				<h1>
					<?php 
						if (isset($_SESSION['mensagem'])) {
							echo $_SESSION['mensagem'];
							unset($_SESSION['mensagem']);
						} else {
							echo 'Olá';
						}
					?>
				</h1>
			</header>
			<nav>
				<ul>
					<li><a href="secreto.php">Quero acessar sem permissão! Hahaha</a></li>
				</ul>
			</nav>

			<div>
				<form method="post" action="secreto.php">
					<fieldset>
						<legend>Entre em wastelands</legend>
						<label for="login">Login</label>
						<input type="text" name="login" id="login" />
						
						<label for="senha">Senha</label>
						<input type="password" name="senha" id="senha" />
						
						<input type="submit" />
					</fieldset>
				</form>
			</div>

			<footer>
				<p>
					&copy; Copyright by Gandalf
				</p>
			</footer>
		</div>
	</body>
</html>