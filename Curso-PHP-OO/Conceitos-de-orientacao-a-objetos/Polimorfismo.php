<?php  
	// Classe exemplificando o funcionamento do polimorfismo

	class Animal{

		public function andar(){
			echo "Andando!";
		}
	}

	class Cavalo extends Animal{
		
		// Método da subclasse que sobrescreve e reedita o comportamento do método da superclasse
		public function andar(){
			echo "Cavalo andando rápido!";
		}
	}

	
	$animal = new Animal();
	$animal->andar();
?>