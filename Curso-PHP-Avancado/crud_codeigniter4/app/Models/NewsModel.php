<?php

    namespace App\Models;
    use CodeIgniter\Model;

    //  Classe Model que contém os atributos que serão salvos no banco.
    class NewsModel extends Model{

        protected $table = 'noticias';
        protected $primaryKey = 'id';
        protected $allowedFields = ['title', 'slug', 'body'];

        // Função do CodeIgniter para softdeletes e usar automaticamente o timestamps
        // Necessário configurar as variáveis com os nomes dos campos na tabela no DB.
        protected $useSoftDeletes = true;
        protected $useTimestamps = true;
        // Configuração dos campos na tabela.
        protected $createdField = 'created_at';
        protected $updatedField = 'updated_at';
        protected $deletedField = 'deleted_at';

        public function getNews($id = null){
            if ($id === null) {
                //Descomentar para trazer todos incluindo os deletados.
                //$this->withDeleted();
                return $this->findAll();
            }

            return $this->asArray()->where(['id' => $id])->first();
        }
    }