<?php  
	// Classes abstratas
	
	abstract class Conta{
		protected $saldo;
		protected $limiteSaque;
		protected $juros;

		abstract protected function sacar($valor);
		//abstract protected function depositar($valor);

		public function setSaldo($saldo){
			$this->saldo = $saldo;
		}

		public function getSaldo(){
			return $this->saldo;
		}
	}

	class ContaCorrente extends Conta{

		public function sacar($valor){
			$this->saldo -= $valor;
			echo "Valor do saque: R$ ".$valor.". Novo saldo: R$ ".$this->saldo;
		}

		public function depositar($valor){
			$this->saldo += $valor;
			echo "Valor do depósito: ".$valor.". Novo saldo: ".$this->saldo;
		}
	}


	$conta1 = new ContaCorrente();
	$conta1->setSaldo(2000);
	$conta1->sacar(30);
	echo "<br>";
	$conta1->depositar(200);

?>