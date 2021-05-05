<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\CodeIgniter;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\IncomingRequest;

/**
 * Classe responsável por responder às requisições com os respectivos métodos.
 */
class News extends BaseController{
    public function index(){
        $model = new NewsModel();

        $data = [
            'news' => $model->getNews()
        ];

        echo view('templates/header');
        echo view('news/overview', $data);
        echo view('templates/footer');
    }

    public function view($id = null){
        if($id === null){
            throw new \CodeIgniter\Exceptions\AlertError("Id Inválido!");
        }

        $model = new NewsModel();
        $data['news'] = $model->getNews($id);

        if(empty($data['news'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Notícia não encontrada");
        }

        $data['title'] = $data['news']['title'];
        echo view('templates/header');
        echo view('news/view', $data);
        echo view('templates/footer');
    }

    public function create(){
        helper('form');
        echo view('templates/header');
        echo view('news/form');
        echo view('templates/footer');
    }

    public function store(){
        helper('form');
        $model = new NewsModel();
        
        $rules = [
            'title' => 'required|min_length[3]|max_length[255]',
            'body' => 'required' 
        ];

        if ($this->validate($rules)) {
            
            $data = [
                'id' => $this->request->getVar('id'),
                'title' => $this->request->getVar('title'),
                'slug' => url_title($this->request->getVar('title')),
                'body' => $this->request->getVar('body')
            ];

            $model->save($data);

            echo view('templates/header');
            echo view('news/success');
            echo view('templates/footer');
        }else{
            echo view('templates/header');
            echo view('news/form');
            echo view('templates/footer');
        }
    }

    public function edit($id = null){
        $model = new NewsModel();

        $data = [
            'news' => $model->getNews($id)
        ];
        if(empty($data['news'])) {
            new \CodeIgniter\Exceptions\PageNotFoundException('Notícia não encontrada!');
        }

        $data = [
            'title' => $data['news']['title'],
            'id' => $data['news']['id'],
            'body' => $data['news']['body']
        ];

        echo view('templates/header');
        echo view('news/form', $data);
        echo view('templates/footer');
    }

    public function delete($id = null){
        $model = new NewsModel();
        $model->delete($id);

        echo view('templates/header');
        echo view('news/delete_success');
        echo view('templates/footer');
    }
}