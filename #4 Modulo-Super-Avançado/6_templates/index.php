<?php
require 'template.class.php';

$array = array(
    "titulo" => "Titulo da Pagina",
    "nome" => "Kleitin",
    "idade" => 3000
);

$tpl = new Template('template.phtml');
$tpl->render($array);

?>