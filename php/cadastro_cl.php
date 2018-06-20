<!DOCTYPE html>
<html>
<head>
	<title>P2 PHP</title>
	<link rel="stylesheet" type="text/css" href="../css/style_iframe.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="centered-div">
		<form action="register_cl.php" method="post">
			<table>
				<tbody>
					<tr>
						<td>Nome:</td>
						<td><input class="text-input" type="text" name="cl_nome" maxlength="60"></td>
					</tr>
					<tr>
						<td>Sobrenome:</td>
						<td><input class="text-input" type="text" name="cl_sobrenome" maxlength="60"></td>
					</tr>
					<tr>
						<td>E-Mail:</td>
						<td><input class="text-input" type="text" name="cl_email" maxlength="60"></td>
					</tr>
					<tr>
						<td>Telefone:</td>
						<td><input class="text-input" type="text" name="cl_phone" maxlength="15"></td>
					</tr>
					<tr>
						<td>CPF:</td>
						<td><input class="text-input" type="text" name="cl_cpf" maxlength="11"></td>
					</tr>
					<tr>
						<td>Data de Nascimento:</td>
						<td><input class="text-input" type="date" name="cl_nascimento"></td>
					</tr>
					<tr>
						<td>Rua:</td>
						<td><input class="text-input" type="text" name="cl_rua" maxlength="140"></td>
					</tr>
					<tr>
						<td>Número:</td>
						<td><input class="text-input" type="text" name="cl_rua_n" maxlength="16"></td>
					</tr>
					<tr>
						<td>Bairro:</td>
						<td><input class="text-input" type="text" name="cl_bairro" maxlength="85"></td>
					</tr>
					<tr>
						<td>Complemento:</td>
						<td><input class="text-input" type="text" name="cl_compl" maxlength="85"></td>
					</tr>
					<tr>
						<td>Cidade:</td>
						<td><input class="text-input" type="text" name="cl_cidade" maxlength="85"></td>
					</tr>
					<tr>
						<td>CEP:</td>
						<td><input class="text-input" type="text" name="cl_cep" maxlength="8"></td>
					</tr>
					<tr>
						<td>País:</td>
						<td><input class="text-input" type="text" name="cl_pais" maxlength="45"></td>
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