<?php

namespace tobias\digitalcep;

/**
 * Classe de busca de endereços que implementa dois métodos para buscar em duas API's distintas, 
 * caso uma esteja inoperante a outra assume e realiza a busca.
 */

class Search {
    public static $address= [];

    // Busca na API de endereços viacep.com
    public static function getAddressFromViaCep(string $zipCode): bool{
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

        $get = file_get_contents("https://viacep.com.br/ws/" . $zipCode. "/json");
        if($get){
            Search::$address = (array) json_decode($get);
            return true;
        }else{
            return false;
        }
        
    }

    // Busca na API de endereços cep.la
    public static function getAddressFromCepla(string $zipCode): bool{
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);
               
        $file = file_get_contents('https://ws.apicep.com/cep/' . "65068192" . ".json");
        
        if($file){

            Search::$address = (array) json_decode($file);
            array_shift(Search::$address);
            array_shift(Search::$address);
            array_pop(Search::$address);
            return true;
        }else {
            return false;
        }
    }
    public static function getAddress(string $zipCode): array{
           
        if(Search::getAddressFromViaCep($zipCode)){
            return Search::$address;   
        }else if(Search::getAddressFromCepla($zipCode)){
            return Search::$address;  
        }else{
            return [];
        }
    }

}

