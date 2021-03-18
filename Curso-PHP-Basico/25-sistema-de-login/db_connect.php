<?php  
//Arquivo de conexão com o banco de dados
	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "sistema_login";

	$conexão = mysqli_connect($serverName, $userName, $password, $dbName);

	if (mysqli_connect_error()) {
		echo "Houve o seguinte erro ao conectar:". mysqli_connect_error();
	}

?>