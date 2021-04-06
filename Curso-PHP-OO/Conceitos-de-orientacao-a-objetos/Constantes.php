<?php  
	// Definição de constantes. Uso de self e parent


	class Mamifero{

		// Criação de uma constante
		const tipo = "Cachorro";

		public function exibirTipo(){
			echo self::tipo;
		}
	}

	class Cachorro extends Mamifero{

		// Criação de uma constante
		const tipo = "Vira-lata";

		public function exibirTipoCachoro(){
			
			// Exibe o valor da constante da própria classe.
			echo self::tipo;
		}

		public function exibirTipo(){
			
			// Exibe o valor da constante da própria classe.
			echo parent::tipo;
		}
	}


	$cachorro = new Cachorro();
	$cachorro->exibirTipo();
	echo "<br>";
	$cachorro->exibirTipoCachoro();

?>