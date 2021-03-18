<!DOCTYPE html>
<html>
<head>
	<title>Upload de Arquivos</title>
</head>
<body>

	<?php 
	
	if(isset($_POST['enviar-formulario'])){

		$formatosValidos = array("png", "jpeg", "jpg", "gif");
		$contador = 0;
		$qtdArquivos = count($_FILES['arquivo']['name']);

		while ($contador <= $qtdArquivos) {

			$extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);

			if(in_array($extensao, $formatosValidos)){
				
				$pasta = 'arquivos/';
				$temporario = $_FILES['arquivo']['tmp_name'][$contador];
				$novoNome = uniqid().".".$extensao;
				
				
				if (move_uploaded_file($temporario, $pasta.$novoNome)) {
					echo "Arquivo enviado com sucesso!<br>";
				}else{
					echo "Falha ao enviar o arquivo!";
				}
			}else{
				echo "Formato inválido!<br>";
			}
			$contador++;
		}
	
	}

	?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
		<input type="file" name="arquivo[]" multiple><br/>
		<input type="submit" name="enviar-formulario" value="Enviar">


	</form>
</body>
</html>