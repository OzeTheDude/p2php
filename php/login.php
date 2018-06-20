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

$sql = "SELECT username, password_hash, level FROM funcionarios";
$result = $conn->query($sql);

if($result->num_rows > 0){
	// output data of each row
	while($row = $result->fetch_assoc()){
		$login_username = $row['username'];
		$login_pw_hash = $row['password_hash'];
		$login_level = $row['level'];
		$login_timeout = 1200; //timeout in seconds

		if ( $login_username == $_POST['username'] && $login_pw_hash == sha1($_POST['password'])) {
			// login successful
			session_start();
			$_SESSION["logged_user"] = $_POST['username'];
			$_SESSION["logged_user_level"] = $login_level;
			header('Location: ../usercp.php');
		}
	}
}else{
	echo "ERROR: incorrect data pattern.";
	header('Location: ../index.php');
}

$conn->close();

?>