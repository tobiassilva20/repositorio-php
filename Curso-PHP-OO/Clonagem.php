<?php
	// Exemplo de clonagem de objetos.
	class Pessoa{
		public $nome;
	}


	$pessoa = new Pessoa();
	$pessoa->nome = "Pessoa";
	// Usando a palavra reservada clone para criar um clone do objeto $pessoa.
	$outraPessoa = clone $pessoa;

	$outraPessoa->nome = "Outra pessoa";

	echo $pessoa->nome; // imprime Pessoa.
	echo "<br>";
	echo $outraPessoa->nome; // imprime outra pessoa.



?>