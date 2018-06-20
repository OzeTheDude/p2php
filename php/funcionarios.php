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
				<th>Nome de Usuario</th>
				<th>Nível</th>
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

				$sql = "SELECT username, level FROM funcionarios";
				$result = $conn->query($sql);

				if($result->num_rows > 0){
					// output data of each row
					while($row = $result->fetch_assoc()){
						echo '<tr>';
							echo '<td>'.$row["username"].'</td>';
							echo '<td>'.$row["level"].'</td>';
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