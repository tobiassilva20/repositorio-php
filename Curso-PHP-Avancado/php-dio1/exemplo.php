<?php

require_once "vendor/autoload.php";

use tobias\digitalcep\Search;

$search = new Search();

print_r($search->getAddressFromZipCode("65068-192"));


?>