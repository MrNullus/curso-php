<?php

spl_autoload_register(function($class) {
    if (file_exists('controllers'.DIRECTORY_SEPARATOR.$class.'.php')) {
        require_once('controllers'.DIRECTORY_SEPARATOR.$class.'.php');
    } else if (file_exists('models'.DIRECTORY_SEPARATOR.$class.'.php')) {
        require_once('models'.DIRECTORY_SEPARATOR.$class.'.php');
    } else if (file_exists('core'.DIRECTORY_SEPARATOR.$class.'.php')) {
        require_once('core'.DIRECTORY_SEPARATOR.$class.'.php');
    }
});

$core = new Core();
$core->run();

?>