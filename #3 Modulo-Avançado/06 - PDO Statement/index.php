<?php
require "usuarios.php";

$u = new Usuarios();

$res = $u->selecionar(1);

$u->atualizar(
    "Gustavo HJ", 
    "gustavo.silva417@gmail.com", 
    "ada", 
    1
);

$u->excluir(2);

?>