<?php
	class Pessoa{

		public function atribuirNome($nome){
			return "O nome da pessoa é: ".$nome;
		}

	}

	class Exibe{
		public $pessoa;
		public $nome;

		public function __construct($nome){
			$this->pessoa = new Pessoa();
			$this->nome = $nome;
		}

		public function exibirNome(){
			echo $this->pessoa->atribuirNome($this->nome);
		}
	}

	$obj = new Exibe("Tobias");
	$obj->exibirNome();
?>