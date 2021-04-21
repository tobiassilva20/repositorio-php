<?php

require_once "vendor/autoload.php";

use tobias\digitalcep\Search;



foreach(Search::getAddress("65068192") as $key => $value){
    echo $key . " : " . $value . "\n";
}

?>