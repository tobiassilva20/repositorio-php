<?php
	//Abrindo a sessão
	session_start();
	//Conexão
	require 'db_connection.php';

	// Função que limpa as strings vindas das entradas dos usuários
	function limparStrings($conn, $input){
		// Proteção contra sql injetion
		$string = mysqli_escape_string($conn, $input);

		// Proteção contra cross site scripting (xss)
		$string = htmlspecialchars($string);

		return $string;
	}

	if(isset($_POST['btn-salvar'])){
		$nome = limparStrings($conexao, $_POST['nome']);
		$sobrenome = limparStrings($conexao, $_POST['sobrenome']);
		$email = limparStrings($conexao, $_POST['email']);
		$idade = limparStrings($conexao, $_POST['idade']);

		$insert = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

		if (mysqli_query($conexao, $insert)) {
			$_SESSION['mensagem'] = "Cliente cadastrado com sucesso!";
			header('Location: ../index.php');
		}else{
			$_SESSION['mensagem'] = "Erro ao cadastrar o cliente!";
			header('Location: ../index.php');
		}
	}

?>