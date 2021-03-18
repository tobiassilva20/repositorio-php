<?php  
	
	//Conexão com o banco de dados
	$serverName = "localhost";
	$userNamer = "root";
	$senhaDb = "";
	$dbName = "crud";


	$conexao = mysqli_connect($serverName, $userNamer, $senhaDb, $dbName);
	mysqli_set_charset($conexao, "utf8");

	if(mysqli_connect_error()){
		echo "Falha na conexão!";
	}

?>