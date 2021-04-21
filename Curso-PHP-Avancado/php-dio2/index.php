<?php
// Este arquivo ilustra a utilização do composer para importar dependências do packgist

require "vendor/autoload.php";

use Wead\DigitalCep\Search;

$buscaCep = new Search();

print_r($buscaCep->getAddressFromZipcode("65068192"));