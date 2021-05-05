<?php

    require_once 'config.php';
    
    $pessoa = new App\Model\Pessoa();

    if(isset($_POST['btn-salvar'])){
        $pessoa->nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $pessoa->idade = $nome = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);
        App\Model\PessoaDao::create($pessoa);
        unset ($_POST['btn-salvar']);
        header('Location: index.php');
    }
?>

<!-- Página principal inicia aqui -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <script src="https://kit.fontawesome.com/ef7b475078.js" crossorigin="anonymous"></script>
    <title>Crud Orm Active Record</title>
</head>
<body>
    <section class="hero is-primary">
        <div class="hero-body">
            <p class="title">
            Exemplo de Crud usando Active Record
            </p>
            <p class="subtitle">
            PHP.
            </p>
        </div>
    </section>
    <div class="container py-5">
        <div class="columns">
            <div class="column is-two-fifths" style="border: 1px solid hsl(0, 0%, 71%)">
                <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
                    <div class="field">
                       <label class="label">Name:</label>
                        <div class="control">
                            <input class="input" type="text" name="nome" 
                            placeholder="Nome..." required>
                        </div>
                    </div>
                    <div class="field">
                       <label class="label">Idade:</label>
                        <div class="control">
                            <input class="input" type="number" name="idade" 
                            placeholder="Idade..." min="0" max="100" required>
                        </div>
                    </div>
                    <div class="control">
                        <input type="submit" class="button is-primary" 
                        name="btn-salvar" value="Salvar">
                    </div>
                </form>
            </div>
        </div>
    
    </div>
    <div class="container">
        <hr>
        <p class="mb-5">Lista de pessoas:</p>
        <div class="columns">
            <div class="column is-two-fifths">
                <table class="table is-striped is-bordered" width="100%">
                    <thead>
                        <th>Nome:</th>
                        <th> Idade: </th>
                        <th class="has-text-centered"> - </th>
                    </thead>
                    <tbody>
                        <?php 
                            $resultSet = App\Model\PessoaDao::read();
                            
                            foreach($resultSet as $pessoa){
                        ?>
                        <tr>
                            <td><?=$pessoa->nome ?></td>
                            <td><?=$pessoa->idade ?></td>
                            <td class="has-text-centered"><?php ?><a 
                            href="App/Actions/Delete.php?id=<?=$pessoa->id ?>" 
                            class="has-text-centered"><i class="fas fa-trash-alt fa-lg" 
                            style="color: red"></i>
                            </a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>        
            </div>
        </div>
    </div> 
</body>
</html>
