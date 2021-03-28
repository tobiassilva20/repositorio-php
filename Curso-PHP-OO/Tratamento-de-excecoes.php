<?php 
	// Exemplo do tratamento de exceções en PHP.
	
	class Pagina{
		public function redirecionar($url){
			if (filter_var($url, FILTER_VALIDATE_URL)) {
				
				header("Location: $url");
			}else{
				throw new Exception("Url inválida!", 404);
				
			}
		}
	}

	$pagina = new Pagina();
	try{
		//$pagina->redirecionar("http://google.com");
		$pagina->redirecionar("http:");
	}catch(Exception $exception){
		echo $exception->getMessage();
	}
?>