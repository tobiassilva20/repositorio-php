<?php  
// Header da página
	include_once 'includes/header.php';

?>

	<div class="row">
		<div class="col s12 m6 push-m3">
			<h3 class="light">Novo cliente</h3>
			<form action="php_action/create.php" method="POST">
				<div class="input-field col s6">
					<input type="text" name="nome" id="nome">
					<label for="nome">Nome</label>
				</div>
				<div class="input-field col s6">
					<input type="text" name="sobrenome" id="sobrenome">
					<label for="sobrenome">Sobrenome</label>
				</div>
				<div class="input-field col s8">
					<input type="text" name="email" id="email">
					<label for="email">E-mail</label>
				</div>
				<div class="input-field col s4">
					<input type="number" name="idade" id="idade">
					<label for="idade">Idade</label>
				</div>
				
					<button class="btn" name="btn-salvar">Salvar cliente</button>
					<a href="index.php" class="btn green">Listar clientes</a>

			</form>
			
		</div>
	</div>

<?php  
// Footer da página
	include_once 'includes/footer.php';

?>