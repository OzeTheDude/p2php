<!DOCTYPE html>
<html>
<head>
	<title>P2 PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
</head>
<body>
	<?php
		session_start();

		if(!$_SESSION["logged_user_level"] == 'admin' || !$_SESSION["logged_user_level"] == 'funcionario'){
			header('Location: index.php');
		}
	?>
	<div id="main-container-ucp" class="centered-div">
		<h2>Painel de Controle</h2>

		<div id="top-left">
			<a class="link-button" href="php/clientes.php" target="display-frame">Listar Clientes</a>
			<?php
				if ($_SESSION['logged_user_level'] == 'admin') {
					echo '<a class="link-button" href="php/funcionarios.php" target="display-frame">Listar Funcionários</a>';
				}
			?>
		</div>

		<div id="top-right">
			<a class="link-button" href="php/cadastro_cl.php" target="display-frame">Cadastrar Cliente</a>
			<?php
				if ($_SESSION['logged_user_level'] == 'admin') {
					echo '<a class="link-button" href="php/cadastro_func.php" target="display-frame">Cadastrar Funcionário</a>';
				}
			?>
			<a class="link-button" href="php/logout.php">Logout</a>
		</div>

		<iframe id="iframe-display" name="display-frame" width="100%" height="400" src="">
			
		</iframe>
	</div>
</body>
</html>