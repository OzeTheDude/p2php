<!DOCTYPE html>
<html>
<head>
	<title>P2 PHP</title>
	<link rel="stylesheet" type="text/css" href="../css/style_iframe.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="centered-div">
		<form action="register_emp.php" method="post">
			<table>
				<tbody>
					<tr>
						<td>Nome de Usuario:</td>
						<td><input class="text-input" type="text" name="employee_username" placeholder="Nome de usuário"></td>
					</tr>
					<tr>
						<td>Senha:</td>
						<td><input class="text-input" type="password" name="employee_password" placeholder="Senha"></td>
					</tr>
					<tr>
						<td>Nível:</td>
						<td>
							<select class="text-input" name="employee_level">
								<option value="funcionario">Empregado</option>
								<option value="admin">Administrador</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="invisible-td"><input class="nice-button" value="Cadastrar" type="submit" name="btnSubmit"></td>
						<td class="invisible-td"></td>
					</tr>
				</tbody>
			</table>			
		</form>
	</div>
</body>
</html>