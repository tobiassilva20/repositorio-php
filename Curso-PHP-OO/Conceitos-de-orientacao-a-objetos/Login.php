<?php  
	/* Getters and Setters.
	 * Construtores. 
	 * Modificadores de acesso.
	 */
	class Login{
		private $nome;
		private $email;
		private $senha;

		// Construtor
		public function __construct($nome, $email, $senha){
			$this->nome = $nome;
			$this->setEmail($email);
			$this->setSenha($senha);
		}

		// Getters e Setters
		public function setEmail($email){
			$this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
		}

		public function getEmail(){
			return $this->email;
		}

		public function getSenha(){
			return $this->senha;
		}

		public function setSenha($senha){
			$this->senha = $senha;
		}

		
		public function logar(){
			if ($this->email == "teste@email.com" && $this->senha == "123456") {
				echo "Login aceito!";
			}else{
				echo "Acesso negado!";
			}
		}
	}


	$logar = new Login("Tobias", "teste@email.com", "123456");
	
	$logar->logar();
	echo "<br>";

	echo $logar->getEmail();
	
	
	
?>