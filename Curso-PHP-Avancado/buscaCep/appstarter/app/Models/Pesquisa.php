<?php 

namespace App\Models;
use CodeIgniter\Model;
class Pesquisa extends Model{
    
    public static function buscarEndereco($cep){

        $cep = preg_replace('/[^0-9]/im', '', $cep);
        $get = file_get_contents("https://viacep.com.br/ws/" . $cep. "/json");
        return (array) json_decode($get);
    }
}

?>
