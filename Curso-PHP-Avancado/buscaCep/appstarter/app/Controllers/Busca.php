<?php 

namespace App\Controllers;

use App\Models\Pesquisa;

class Busca extends BaseController{
    public function index() {
        $data['cep'] = [];
        echo view('home', $data);
    }
    
    public function pesquisar(){
        helper('form');
        $data['cep'] = [];
        $rules = ['cep' => 'required|min_length[8]|max_length[8]'];

        if($this->validate($rules)){
            $data['cep'] = Pesquisa::buscarEndereco($this->request->getVar('cep'));

            return view('home', $data); 
        }   
        return view('home', $data);
    }
}
?>
