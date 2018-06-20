<!DOCTYPE html>
<html>
<head>
	<title>P2 PHP</title>
	<link rel="stylesheet" type="text/css" href="../css/style_iframe.css">
	<meta charset="utf-8">
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Nome</th>
				<th>E-Mail</th>
				<th>Telefone</th>
				<th>CPF</th>
				<th>Data de Nascimento</th>
				<th>Endereço</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$servername		= "localhost";
				$username		= "root";
				$password		= "";
				$dbname			= "p2php";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);

				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				} 

				$sql = "SELECT a.nome, a.sobrenome, a.cpf, a.email, a.telefone, a.data_nascimento, b.rua, b.numero, b.bairro, b.complemento, b.cidade, b.cep, b.pais FROM clientes AS a, enderecos AS b WHERE a.id_cliente = b.id_cliente";
				$result = $conn->query($sql);

				if($result->num_rows > 0){
					// output data of each row
					while($row = $result->fetch_assoc()){
						echo '<tr>';
							echo '<td>'.$row["nome"].' '.$row['sobrenome'].'</td>';
							echo '<td>'.$row["email"].'</td>';
							echo '<td>'.$row["telefone"].'</td>';
							echo '<td>'.$row["cpf"].'</td>';
							echo '<td>'.$row["data_nascimento"].'</td>';
							echo '<td>'.$row["rua"].' '.$row["numero"].' '.$row["bairro"].' '.$row["complemento"].' '.$row["cidade"].' '.$row["cep"].' '.$row["pais"].'</td>';
						echo '</tr>';
					}
				}else{
					echo "ERROR: incorrect data pattern.";
				}

				$conn->close();
			?>
		</tbody>
	</table>
</body>
</html>