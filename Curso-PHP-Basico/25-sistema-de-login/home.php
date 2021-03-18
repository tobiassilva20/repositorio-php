<?php

	//Invocando o arquivo de conexão
	require_once 'db_connect.php';

	//Criação da sessão
	session_start();

	//Verificando a se o usuário está logado
	if(!isset($_SESSION['logado'])){
		header('Location: index.php');
	}


	//Recuperando os dados do usuário.
	$id = $_SESSION['id_usuario'];
	$sql = "SELECT * FROM usuarios WHERE id = '$id'";
	$resultado = mysqli_query($conexão, $sql);
	$dados = mysqli_fetch_array($resultado);
	print_r($resultado);
	//encerrando a conexão
	mysqli_close($conexão);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Página Restrita</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Bem-vindo! <?php echo $dados['nome']; ?> </h1>
	<a href="logout.php">Sair</a>
</body>
</html>