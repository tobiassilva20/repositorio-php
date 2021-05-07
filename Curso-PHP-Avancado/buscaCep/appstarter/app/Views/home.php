<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <title>Busca Cep</title>
</head>
<body>
    
    <div class="container">
        <div class="content is-large py-5">
            <div class="is-info">
                <h3>Ola! Bem-vindo ao site de pesquisa de endereços.</h3>
            </div>
            <?php echo \Config\Services::validation()->listErrors();  ?>
            <div class="columns">
                <div class="column is-one-quarter">
                    <form action="/busca/pesquisar" method="post">
                        <div class="field">
                            <label class="label" for="cep">CEP:</label>
                            <div class="control">
                                <input class="input" type="text" id="cep" name="cep" placeholder="Digite apenas números...:" >
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <input class="button is-primary" type="submit" value="Pesquisar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="column is-two-quarters">
              <p>Endereço: <p>
                <?php 
                    foreach($cep as $key => $value){
                        if(isset($cep['erro'])){
                            echo "Endereço não encontrado!";
                            return;
                        }
                        echo $key. " : ".$value. "<br>";
                    }
                ?>
            </div>
        </div>
    </div>

</body>
</html>
