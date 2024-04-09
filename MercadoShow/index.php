<?php 

require_once('produtos.class.php');


$produto = new Produtos();
$tabela = $produto->Listar();
print_r($tabela);

/*$produto->nome='Cookie';
$produto->preco=1.00;
$produto->quantidade=80;
$produto->id_categoria=1;
$produto->id_fornecedor=2;
$produto->Cadastrar();


$produto->nome='Pão de Sal';
$produto->preco=15.00;
$produto->quantidade=100;
$produto->id_categoria=1;
$produto->id_fornecedor=1;
$produto->Cadastrar();


$produto->nome='Pão de deus';
$produto->preco=25.00;
$produto->quantidade=80;
$produto->id_categoria=1;
$produto->id_fornecedor=1;
$produto->Cadastrar();*/



$produto->id=17;
$produto->Apagar();
$tabela = $produto->Listar();
print_r($tabela);

$produto->id=18;
$produto->Apagar();
$tabela = $produto->Listar();
print_r($tabela);

$produto->id=19;
$produto->nome='Pão dos deuses';
$produto->preco=27.00;
$produto->quantidade=50;
$produto->id_categoria=1;
$produto->id_fornecedor=1;
$produto->Modificar();
$tabela = $produto->Listar();
print_r($tabela);





?>