<?php 

require_once('classes/Usuario.class.php');

$usuario = new Usuario();

$usuario->Listar();

//print_r($usuario->Listar());
$tabela = $usuario->Listar();

print_r($tabela);

?>