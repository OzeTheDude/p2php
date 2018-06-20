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

$sql = "INSERT INTO `funcionarios` (`id`, `username`, `password_hash`, `level`) 
VALUES (NULL, '".$_POST['employee_username']."', '".sha1($_POST['employee_password'])."', '".$_POST['employee_level']."');";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>