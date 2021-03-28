<?php 

namespace App\Model;

	class Produto{
		private $id;
		private $nome;
		private $descricao;

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getDescricao(){
			return $this->descricao;
		}

		public function setDescricao($descricao){
			$this->descricao = $descricao;
		}

		public function __toString(){
			return "{Nome: ".$this->nome." | Descrição: ".$this->descricao."}";
		}
	}

 ?>