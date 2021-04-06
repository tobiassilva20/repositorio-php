<?php  
	//Exemplo de herança em PHP

	class Veiculo{
		public $modelo;
		public $cor;
		public $ano;

		public function __construct($modelo, $cor, $ano){
			$this->modelo = $modelo;
			$this->cor = $cor;
			$this->ano = $ano;
		}

		public function movimentar(){
			echo $this->modelo." está se movimentando.";
		}

		public function parar(){
			echo $this->modelo." está parando.";
		}

	}

	class Carro extends Veiculo{}

	class Moto extends Veiculo{}

	$carro1 = new Carro("Celta", "Preto", 2010);
	$carro1->movimentar();
	echo "<br>";
	$moto1 = new Moto("CG 125", "Vermelho", 2008);
	$moto1->parar();
?>