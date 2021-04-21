<?php 

	require_once '../../vendor/autoload.php';
	
	// Sessão.
	session_start();
	$id = $_POST['id'];
	
	$produtoDao = new App\Model\ProdutoDao();

	if ($produtoDao->delete($id)) {
		$_SESSION['mensagem'] = "Produto deletado com sucesso!";
		$_SESSION['status'] = "success";
		header('Location: ../../index.php');
	}else{
		$_SESSION['mensagem'] = "Ocorreu um erro ao deletar o produto!";
		$_SESSION['status'] = "danger";
		header('Location: ../../index.php');
	}

 ?>