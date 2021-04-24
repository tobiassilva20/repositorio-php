<?php

require_once "vendor/autoload.php";

use tobias\digitalcep\Search;



foreach(Search::getAddress("65060850") as $key => $value){
    echo $key . " : " . $value . "\n";
}

?>