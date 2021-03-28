<?php 
	require_once '../../vendor/autoload.php';

	$id = $_GET['id'];
	
	$produtoDao = new App\Model\ProdutoDao();
	$produtoDao->delete($id);
	header('Location: ../../listar.php');

 ?>