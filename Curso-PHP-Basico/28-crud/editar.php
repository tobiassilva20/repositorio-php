<?php  
	// Header da página
	include_once 'includes/header.php';
	//Conexão
	include_once 'php_action/db_connection.php';

	if (isset($_GET['id'])) {
		$id = mysqli_escape_string($conexao, $_GET['id']);
		$select = "SELECT * FROM clientes WHERE id = '$id'";
		$resultado = mysqli_query($conexao, $select);
		$dados = mysqli_fetch_array($resultado);

	}

?>

	<div class="row">
		<div class="col s12 m6 push-m3">
			<h3 class="light">Editar cliente</h3>
			<form action="php_action/update.php" method="POST">
				<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
				<div class="input-field col s6">
					<input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
					<label for="nome">Nome</label>
				</div>
				<div class="input-field col s6">
					<input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']; ?>">
					<label for="sobrenome">Sobrenome</label>
				</div>
				<div class="input-field col s8">
					<input type="text" name="email" id="email" value="<?php echo $dados['email']; ?>">
					<label for="email">E-mail</label>
				</div>
				<div class="input-field col s4">
					<input type="number" name="idade" id="idade" value="<?php echo $dados['idade']; ?>">
					<label for="idade">Idade</label>
				</div>
					<button class="btn" name="btn-atualizar">Atualizar cliente</button>
					<a href="index.php" class="btn green">Listar clientes</a>

			</form>
			
		</div>
	</div>

<?php  
// Footer da página
	include_once 'includes/footer.php';

?>