<?php 
	// Associação entre dois objetos de classes diferentes.

	
	class Pedido{

		public $numero;
		public $cliente;

		public function __construct($numero, $cliente){
			$this->numero = $numero;
			$this->cliente = $cliente;
		}
	}

	class Cliente{
		public $nome;
		public $endereco;

		public function __construct($nome, $endereco){
			$this->nome = $nome;
			$this->endereco = $endereco;
		}

	}

	$cliente = new Cliente("Tobias", "São Luís");
	
	
	
	$pedido = new Pedido("999", $cliente);
	
		
	$dadosPedido = array(
		'numero' => $pedido->numero,
		'nome_do_cliente' => $pedido->cliente->nome,
		'endereco_do_cliente' => $pedido->cliente->endereco 
	);

	var_dump($dadosPedido);
?>