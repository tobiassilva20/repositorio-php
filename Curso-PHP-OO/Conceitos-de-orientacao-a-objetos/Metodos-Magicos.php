<?php

	/*
	 * clone();
	 * construct();
	 * invoke();
	 * toString();
	 * get();
	 * set();
	*/
	class Pessoa{
		private $dados = array();

		/* Método de atribuição que recebe como parâmetro o nome do atributo e o valor que será atribuído a ele.*/
		public function __set($nome, $valor){
			$this->dados[$nome] = $valor;
		}

		/* Método de recuperação que recebe como parâmetro apenas o nome do atributo que será retornado.*/
		public function __get($nome){
			return $this->dados[$nome];
		}

		// Permite transformar um objeto em formato string
		public function __toString(){
			return $this->nome;
		}

		// Permite que uma instância de uma classe seja invocada como se fosse uma função.
		public function __invoke(){
			return $this->nome;
		}
	}

	$pessoa = new Pessoa();
	$pessoa->nome = "Tobias";
	$pessoa->idade = 36;
	
	echo $pessoa();

?>