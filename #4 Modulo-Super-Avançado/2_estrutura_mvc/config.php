<?php
require 'environment.php';

define(
    "BASE_URL", 
    "http://localhost/curso-php/%234%20Modulo-Super-Avan%C3%A7ado/2_estrutura_mvc"
);
global $config;

$config = array();
if (ENVIRONMENT == "development") {
    $config['dbname'] = 'galeria';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} else {
    $config['dbname'] = 'galeria';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}

?>