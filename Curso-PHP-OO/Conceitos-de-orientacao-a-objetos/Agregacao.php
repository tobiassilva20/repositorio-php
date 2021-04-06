<?php 
	class Produto{
		public $nome;
		public $valor;

		public function __construct($nome, $valor){
			$this->nome = $nome;
			$this->valor = $valor;

		}
	}

	class CarrinhoCompras{
		public $produtos;


		public function adicionarAoCarrinho(Produto $produto){
			$this->produtos[] = $produto;
		}

		public function exibeProdutos(){
			echo 'Lista de produtos:"."<br><hr>';
			foreach ($this->produtos as $produto) {
				echo "Produto: ".$produto->nome;
				echo ". Valor:".$produto->valor."<br>";
			}
		}
	}

	$produto1 = new Produto("Notebook", 1500);
	$produto2 = new Produto("Mouse", 150);

	$carrinho = new CarrinhoCompras();

	$carrinho->adicionarAoCarrinho($produto1);
	$carrinho->adicionarAoCarrinho($produto2);

	$carrinho->exibeProdutos();

?>