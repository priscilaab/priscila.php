<?php

require_once('Carro.class.php');

$carro1 = new Carro();

$carro1->modelo = "Gol";
$carro1->marca = "Volkswagem";
$carro1->cor = "Vermelho";
$carro1->ano = 2003;

$carro1->Ligar();

$carro1->MostrarPainel();

$carro1->Acelerar();
$carro1->Acelerar();
$carro1->Acelerar();

$carro1->MostrarPainel();

?>