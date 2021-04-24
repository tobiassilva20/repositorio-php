<?php

use PHPUnit\Framework\TestCase;
use tobias\digitalcep\Search;


class SearchTest extends TestCase{

    /**
     * @dataProvider casosDeTeste
     */
    public function testGetAddressDefaultUsage(string $input, array $esperado){
        
        $resultado = Search::getAddress($input);

        $this->assertEquals($esperado, $resultado);
    }

    public function casosDeTeste(){
        return [
            "Endereço Rua Vinte" => [
                "65068192", ["cep" => "65068-192",
                "logradouro" => "Rua Vinte",
                "complemento" => "",
                "bairro" => "Sol e Mar",
                "localidade" => "São Luís",
                "uf" => "MA",
                "ibge" => "2111300",
                "gia" => "",
                "ddd" => "98",
                "siafi" => "0921"]
            ],

            "Endereço Rua Nsa Sra de Fatima" => [
                "65060850", ["cep"=> "65060-850",
                "logradouro"=> "Rua Nossa Senhora de Fátima",
                "complemento"=> "",
                "bairro"=> "Vila Isabel Cafeteira",
                "localidade"=> "São Luís",
                "uf"=> "MA",
                "ibge"=> "2111300",
                "gia"=> "",
                "ddd"=> "98",
                "siafi"=> "0921"]
            ]
        ];
    }
}