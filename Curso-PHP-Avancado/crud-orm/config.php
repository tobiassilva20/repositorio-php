<?php

    require_once 'vendor/autoload.php';

    ActiveRecord\Config::initialize(function($cfg){   
        
        $cfg->set_connections(array('development' =>
        'mysql://root:@localhost/php-orm'));
    });

?>