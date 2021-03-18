<?php

	//Conexão
	include_once 'php_action/db_connection.php';
	// Header da página
	include_once 'includes/header.php';
	//Mensagem ao adicionar
	include_once 'includes/mensagem.php';

?>

	<div class="row">
		<div class="col s12 m6 push-m3">
			<h3 class="light">Cliente Cadastrados</h3>
			<table class="striped">
				<thead>
					<tr>
						<th>Nome:</th>
						<th>Sobrenome:</th>
						<th>Email:</th>
						<th>Idade:</th>
					</tr>
				</thead>
				<tbody>
					<?php  
						$select = "SELECT * FROM clientes;";
						$resultado = mysqli_query($conexao, $select);
						asort($resultado);
					if(mysqli_num_rows($resultado) > 0){

						while ($dados = mysqli_fetch_array($resultado)) {
					?>

					<tr>
						<td><?php echo $dados['nome'];?></td>
						<td><?php echo $dados['sobrenome'];?></td>
						<td><?php echo $dados['email'];?></td>
						<td><?php echo $dados['idade'];?></td>
						<td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
						
						<td><a href="#modal<?php echo $dados['id'];?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

												 <!-- Modal Structure -->
						  <div id="modal<?php echo $dados['id'];?>" class="modal">
						    <div class="modal-content">
						      <h4>Opa!</h4>
						      <h5>Deseja realmente excluir este registro?</h5>
						    </div>
						    <div class="modal-footer">
						      <form action="php_action/delete.php" method="POST">
						      	<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
						      	<button type="submit" name="btn-deletar" class="btn green">Sim, quero deletar</button>
						      	<a href="#!" class="modal-close waves-effect waves-green btn-flat orange">Cancelar</a>
						      </form>

						    </div>
						  </div>

					</tr>
				<?php 
					} 
				}else{ ?>
					<tr>
						<td>-</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
					</tr>
				<?php }	?>
				</tbody>
			</table>
			<br/>
			<a href="adicionar.php" class="btn">Adicionar Cliente</a>
		</div>
	</div>

<?php  
// Footer da página
	include_once 'includes/footer.php';

?>