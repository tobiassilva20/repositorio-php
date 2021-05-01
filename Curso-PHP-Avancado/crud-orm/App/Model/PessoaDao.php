<?php

namespace App\Model;

use App\Model\Pessoa;
/**
 * Classe que contém os métodos responsáveis pelas transações com o banco de
 * dados.
 */
class PessoaDao{
    
    public static function create(Pessoa $pessoa){
        /**
         * Método create(), herdado da classe Model do Active Record e recebe
         * como parâmetro um array com os dados a serem salvos.
         */
        Pessoa::create($pessoa->to_array());
    }
    public static function update(Pessoa $pessoa){
        /**
         * Método find(), herdado da classe Model do Active Record e recebe
         * como parâmetro um identificador do registro que se deseja atualizar
         * Depois invocado o método update_atribuites().
         */
        Pessoa::find($pessoa->id)->update_attributes($pessoa->to_array());
    }
    public static function read(){
        /**
         * Método all(), que retorna todos os registros de uma tabela.
         */
        return Pessoa::all();;
    }
    public static function delete($id){
        /**
         * Método delete(), usado para exluir registros do banco, após encontrá-
         * lo por meio do método find(), passando um identificador como parâme
         * tro.
         */
        Pessoa::find($id)->delete();
    }
}