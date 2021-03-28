<?php
	
	// Criação de uma interface
	interface Crud{

		// Métodos declarados dentro da interface
		public function create($usuario);
		public function read($string);
		public function update($usuario);
		public function delete($usuario);
	}

	// Classe que implementa a interface Crud
	class Sistema implements Crud{

		//Implementação dos métodos da interface Crud
		public function create($usuario){
			echo "Usuario criado com sucesso!"."<br>";
		}

		public function read($string){
			
			echo ($string == "Tobias") ? "Usuario encontrado!"."<br>" : "Usuario não encontrado!"."<br>" ;
		}

		public function update($usuario){

			echo "Usuario atualizado com sucesso!"."<br>";
		}

		public function delete($usuario){
			echo "Usuario deletado com sucesso!"."<br>";
		}
	}

	class Usuario{
		private $nome;
		private $cpf;
		private $email;

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getNome(){
			return $this->nome;
		}

		public function __construct($nome, $cpf, $email){
			$this->nome = $nome;
			$this->cpf = $cpf;
			$this->email = $email;
		}
	}


	$sistema = new Sistema();

	$usuario = new Usuario("Tobias", "000000000000", "tobias@hotmail.it");

	$sistema->create($usuario);
	
	$sistema->read($usuario->getNome());
	
	$usuario->setNome("João");

	$sistema->update($usuario);

	$sistema->delete($usuario);

?>