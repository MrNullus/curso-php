<?php
require "usuarios.php";

$usuario = new Usuario("");
$usuario->setNome("Shuwasneger Negão"); 
$usuario->setEmail("ShuwasnegerNegao@hotmail.com");
$usuario->setSenha("123");
$usuario->salvar();

echo "Usuário com sucesso! <br />";

echo "Meu nome eh ". $usuario->getNome();

?>