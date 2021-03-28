<?php
	//Classes
	class Pessoa{

		// Atributos da classe Pessoa
		public $nome;
		public $idade;

		// Método pertencente à classe Pessoa
		public function falar(){
			echo "Nome: ".$this->nome.".";
			echo "<br>";
			echo "Idade: ".$this->idade. " anos.";

		}
	}

	//Instanciação da classe Pessoa / 
	$pessoa = new Pessoa();
	$pessoa->nome = "Tobias Silva";
	$pessoa->idade = 36;
	$pessoa->falar();
	//var_dump($pessoa);


?>