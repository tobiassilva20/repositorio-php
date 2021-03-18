<?php 
	//Conexao
	include_once 'db_connection.php';
	include_once 'includes/mensagem.php';
	session_start();
	if(isset($_POST['btn-deletar'])){
		$id = $_POST['id'];
		
		$delete = "DELETE FROM clientes WHERE id ='$id'";
		
		
		if (mysqli_query($conexao, $delete)) {
			$_SESSION['mensagem'] = "Cliente apagado com sucesso!";
			header('Location: ../index.php');
		}else{
			$_SESSION['mensagem'] = "Erro ao deletar o cliente!";
			header('Location: ../index.php');
		}
	}

?>