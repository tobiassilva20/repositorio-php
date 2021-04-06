<?php 
	
	require_once '../../vendor/autoload.php';

	//Sessão
	session_start();

	if (isset($_POST['btn-salvar'])) {
		$produto_limpo = filter_input(INPUT_POST, 'produto', FILTER_SANITIZE_SPECIAL_CHARS);
		$descricao_limpa = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
		$produto = new App\Model\Produto();
		$produto->setNome($produto_limpo);
		$produto->setDescricao($descricao_limpa);
		
		$produtoDao = new App\Model\ProdutoDao();
		if ($produtoDao->create($produto)) {
			$_SESSION['mensagem'] = "Produto salvo com sucesso!";
			$_SESSION['status'] = "success";
			header('Location: ../../listar.php');
		}else{
			$_SESSION['mensagem'] = "Ocorreu um erro ao salvar o produto!";
			$_SESSION['status'] = "danger";
			header('Location: ../../listar.php');
		}
		
	}

?>

