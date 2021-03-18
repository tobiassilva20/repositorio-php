<!DOCTYPE html>
<?php 
	/*
		Sistema de Login utilizando PHP Procedural, apenas para fins didáticos.
	*/

	//Invocando o arquivo de conexão
	require_once 'db_connect.php';

	//Criação da sessão
	session_start();

	//Mapeamento do botão de login
	if (isset($_POST['btn-entrar'])) {
		
		//Array para armazenar os erros
		$erros = array();

		$login = mysqli_escape_string($conexão, $_POST['login']);
		$senha = mysqli_escape_string($conexão, $_POST['senha']);

		if (empty($login) or empty($senha)) {
			$erros[] = "<li>Login ou senha inválidos!</li>";
		}else{
			$sql = "SELECT login FROM usuarios WHERE login = '$login'";
			$resultado = mysqli_query($conexão, $sql);
			//$resultado = 'admin';
			if (mysqli_num_rows($resultado) > 0) {
				$senha = md5($senha);
				$sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
				$resultado = mysqli_query($conexão, $sql);

				if (mysqli_num_rows($resultado) == 1) {
					
					//Recuperando os dados do banco
					$dados = mysqli_fetch_array($resultado);

					//encerrando a conexão
					mysqli_close($conexão);

					//Criação das sessões
					$_SESSION['logado'] = true;
					$_SESSION['id_usuario'] = $dados['id'];
					
					//Redirecionamento para a página restrita
					header('Location: home.php');
				}else{
					$erros[] = "<li>Usuário e senha não conferem!</li>";
				}

			}else{
				$erros[] = "<li> Usuário não encontrado!</li>";
			}
		}
	}
?>


<html>
<head>
	<title>Página de Login</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Login</h1>
	<?php 
		if(!empty($erros)){
			foreach ($erros as $erro) {
				echo "$erro<br>";
			}
		}

	?>

	<hr>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		Login:<input type="text" name="login">	<br/>
		Senha:<input type="password" name="senha"> <br/>
		<button type="submit" name="btn-entrar"> Entrar </button>

	</form>
</body>
</html>