<!DOCTYPE html>
<html>
<head>
	<title>P2 PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
</head>
<body>
	<div id="main-container" class="centered-div">
		<h2>Realizar Login</h2>

		<form action="php/login.php" method="post">
			<input class="text-input" type="text" name="username" placeholder="Nome de usuário">
			<br/>
			<input class="text-input" type="password" name="password" placeholder="Senha">
			<br/>
			<input class="nice-button" value="Login" type="submit" name="btnSubmit">
		</form>
	</div>
</body>
</html>