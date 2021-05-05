<script>
    function confirma(){
        if(!confirm("Deseja realmente excluir?")){
            return false;
        }
        return true;
    }
</script>

<h2 class="align-self-center m-5">Arquivo de notícias</h2>
<a href="/news/create" class="btn btn-primary mb-3 align-self-start">Nova notícia</a>
<h5 class="text-secondary w-25 py-3 rounded d-flex">Últimas notícias:</h5>
<table class="table">
    <tr>
        <th>Título</th>
        <th>Ação</th>
    </tr>
    <?php if(!empty($news) && is_array($news)):  ?>
        <?php foreach($news as $news_item):  ?>
            <tr>
                <td><a href="<?php echo "/news/view/". $news_item['id'] ?>">
                <?=$news_item['title'] ?></a></td>
                <td> <a href="<?php echo "/news/edit/". $news_item['id'] ?>">
                <i class="bi-pencil-fill" style="font-size: 1.5rem; color: #fd7e14;"></i></a> 
                - 
                <a href="<?php echo "/news/delete/". $news_item['id'] ?>" 
                onclick="return confirma()">
                <i class="bi-trash-fill" style="font-size: 1.5rem; color: red;"></a></td>
            </tr>
        
        <?php  endforeach; ?>
    <?php else:  ?>
        <tr>
            <td colspan="2">Nenhuma notícia encontrada!</td>
        </tr>
    <?php  endif; ?>
    


</table>