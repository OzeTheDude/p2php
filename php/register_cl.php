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

$sql = "INSERT INTO clientes (nome, sobrenome, cpf, email, telefone, data_nascimento) VALUES ('".$_POST['cl_nome']."', '".$_POST['cl_sobrenome']."', '".$_POST['cl_cpf']."', '".$_POST['cl_email']."', '".$_POST['cl_phone']."', '".$_POST['cl_nascimento']."');";

if ($conn->query($sql) === TRUE) {
	$last_id = $conn->insert_id;
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO enderecos (rua, numero, bairro, complemento, cidade, cep, pais, id_cliente) VALUES ('".$_POST['cl_rua']."', '".$_POST['cl_rua_n']."', '".$_POST['cl_bairro']."', '".$_POST['cl_compl']."', '".$_POST['cl_cidade']."', '".$_POST['cl_cep']."', '".$_POST['cl_pais']."', '".$last_id."');";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);

?>