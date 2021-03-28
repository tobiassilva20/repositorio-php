<?php  
	// Métodos e atributos estáticos
	
	class Login{
		public static $user;

		public static function logar(){
			echo "Usuário: ". self::$user;
			echo "<br>";
			echo "Status: logado";
		}
	}

	// Para acessar métodos e atributos estáticos não é necessário instanciar a classe.	
	Login::$user = "admin";
	Login::logar();
?>