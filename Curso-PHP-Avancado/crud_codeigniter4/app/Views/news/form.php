<h2><?php echo isset($id) ? "Editar notícia:" : "Nova notícia:";  ?></h2>
<?php echo \Config\Services::validation()->listErrors();  ?>

<form action="/news/store" method="post">
    <div class="form-group">
        <label for="title">Título:</label>
        <input type="text" id="title" name="title" class="form-control"
        placeholder="Digite o título da notícia aqui..." 
        value="<?php echo isset($title) ? $title : set_value('title'); ?>">
    </div>
    <div class="form-group">
        <label for="body">Notícia:</label>
        <textarea name="body" id="body" cols="30" rows="10" class="form-control"
        placeholder="Digite o texto aqui..." ><?php echo isset($body) ? $body : set_value('body')  ?>
        </textarea>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Salvar">
        <a href="/news" class="btn btn-success">Voltar</a>
    </div>
    <input type="hidden" name="id" value="<?php echo isset($id) ? $id : set_value('id');?>">
</form>




