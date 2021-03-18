<?php 
	//Conexao
	include_once 'db_connection.php';
	include_once 'includes/mensagem.php';
	
	session_start();

	// Função que limpa as strings vindas das entradas dos usuários
	function limparStrings($conn, $input){
		// Proteção contra sql injetion
		$string = mysqli_escape_string($conn, $input);

		// Proteção contra cross site scripting (xss)
		$string = htmlspecialchars($string);

		return $string;
	}

	if(isset($_POST['btn-atualizar'])){
		$id = $_POST['id'];
		$nome = limparStrings($conexao, $_POST['nome']);
		$sobrenome = limparStrings($conexao, $_POST['sobrenome']);
		$email = limparStrings($conexao, $_POST['email']);
		$idade = limparStrings($conexao, $_POST['idade']);
		
		$update = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id ='$id'";
		
		
		if (mysqli_query($conexao, $update)) {
			$_SESSION['mensagem'] = "Cliente atualizado com sucesso!";
			header('Location: ../index.php');
		}else{
			$_SESSION['mensagem'] = "Erro ao atualizar o cliente!";
			header('Location: ../index.php');
		}
	}

?>