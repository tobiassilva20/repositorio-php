<?php 
	require_once 'vendor/autoload.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Cadastro de Produtos</title>
 	<meta charset="utf-8">
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
 	<link rel="apple-touch-icon" sizes="180x180" href="App/Assets//apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="App/Assets/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="App/Assets/favicon-16x16.png">
	<link rel="manifest" href="App/Assets//site.webmanifest">
 </head>
 <body>
 	<section class="section py-5">
 		<div class="container has-text-centered notification is-primary is-size-3">
 			<p>Produtos cadastrados.</p>
 		</div>
 	</section>
 	<section class="section py-5">
 		<div class="container">
 			<div class="columns is-centered">
 				<div class="column is-two-thirds">
 					<div class="container is-flex is-flex-direction-column is-align-items-center">
 						<table class="table is-striped is-bordered is-two-thirds" width="100%">
 							<thead>
 								<tr><td class="is-info" style="border-right: 1px solid hsl(0,0%,71%)">Produto:</td><td class="is-info" style="border-right: 1px solid hsl(0,0%,71%)">Descrição:</td><td class="is-info"></td></tr>
 							</thead>
 							<tbody>

 								<?php
 									// Consulta no banco dos produtos cadastrados.  
 									$produtoDao = new App\Model\ProdutoDao();
 									
 									$sql = 'SELECT * FROM produtos';
 									$stmt = App\Model\Conexao::getConn()->prepare($sql);
 									$stmt->execute();

 									if ($stmt->rowCount()  >= 1) {
 										
 										// Laço para exibir todos os produtos encontrados.
										foreach ($produtoDao->read() as $produto) {
							
								?>
 								<tr><td><?php echo $produto['nome'] ?></td><td><?php echo $produto['descricao'] ?></td>
 									<td>
 										<div class="control has-text-centered">
    										<button class="button is-danger">
    											<a href="App/Actions/excluir.php?id=<?php echo $produto['id']; ?>" class="has-text-white">Excluir</a>
    										</button>
  										</div>
									</td>
								</tr>
 								<?php
 									} 
 								?>
 								<?php 
 									}else{ 
 								?>
 									<tr><td>-</td><td>-</td><td>-</td></tr>

 								<?php		
 									};
 								 ?>
 							</tbody>
 						</table>
 						<div class="is-align-self-flex-start">
 							<div class="control is-align-self-flex-start">
    							<button class="button is-primary">
    								<a href="index.php" class="has-text-white">Voltar</a>
    							</button>
  							</div>
 						</div>
 					</div>
 				</div>
  			</div>
 		</div>
 	</section>
 </body>
 </html>
