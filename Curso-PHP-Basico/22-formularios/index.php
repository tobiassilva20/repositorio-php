<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>
	<?php  
	/*
		Validações
		Funções (filter_input & filter_var)
		FILTER_VALIDATE_INT
		FILTER_VALIDATE_EMAIL
		FILTER_VALIDATE_FLOAT
		FILTER_VALIDATE_IP
		FILTER_VALIDATE_URL
	*/

	/*
		Sanitização
		Funções (filter_input & filter_var)
		FILTER_SANITIZE_SPECIAL_CHARS
		FILTER_SANITIZE_NUMBER_INT
		FILTER_SANITIZE_EMAIL
		FILTER_SANITIZE_URL
	*/
	?>

	<?php  
		if(isset($_POST['enviar-formulario'])){

			//Array de erros
			$erros = array();
			
			//Validações
			/*if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {
				$erros[] = "Idade inválida!";
			}
			if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
				$erros[] = "Email inválido!";
			}
			if (!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)) {
				$erros[] = "Peso inválido!";
			}
			if (!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)) {
				$erros[] = "Ip inválido";
			}if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {
				$erros[] = "URL inválida";
			}*/

			//Sanitização
			$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
			echo $nome."<br>";

			$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
			if (!filter_var($idade, FILTER_VALIDATE_INT)) {
				$erros[] = "Idade inválida!";
			}

			$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$erros[] = "Email inválido!";
			}

			$url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
			if (!filter_var($url, FILTER_VALIDATE_URL)) {
				$erros[] = "URL inválida!";
			}


			//Exibir erros do formulário
			if (!empty($erros)) {
				foreach ($erros as $erro) {
					echo "<li> $erro </li>";
				}
			}else{
				echo "Não há erros!";
			}
		}
	?>

	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
		Nome: <input type="text" name="nome"> <br/>
		Idade: <input type="text" name="idade"> <br/>
		Email: <input type="email" name="email"> <br/>
		<!--Peso: <input type="email" name="peso"> <br/>-->
		<!--Ip: <input type="email" name="ip"> <br/>-->
		Url: <input type="url" name="url"> <br/>
		<input type="submit" name="enviar-formulario" value="Enviar">

	</form>
</body>
</html>