<?php 

	// Namespaces utilizados para resolver conflitos com nomes de classes iguais
	// pode ser usado com o comando use\NomeDaClasse;
	require 'classes/produto.php';
	require 'models/produto.php';

	use classes\Produto as ProdutoClasses;
	use models\Produto as ProdutoModel;
	//Uso alternativo no momento da instanciação da classes 
	// $var = \namespace\NomeDaClasse();


	$produto = new ProdutoClasses();
	$produto->mostrarDetalhes();

	echo "<br>";

	$outroProduto = new ProdutoModel();
	$outroProduto->mostrarDetalhes();

?>