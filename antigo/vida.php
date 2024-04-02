<?php 

require_once('Humano.class.php');
require_once('Ferramentas.class.php');

$humano = new Humano("Britney",2.6,"Feminino");

$humano->MostrarDados();
$humano->FazerAniversario();
$humano->Comer();
$humano->MostrarDados();
$humano->FazerAniversario();
$humano->Comer();
$humano->MostrarDados();
$humano->FazerAniversario();
$humano->Comer();
$humano->MostrarDados();
$humano->FazerAniversario();
$humano->Exercitar();
$humano->MostrarDados();
$humano->Comer();
$humano->FazerAniversario();
$humano->MostrarDados();
$humano->Comer();
$humano->FazerAniversario();
$humano->MostrarDados();
$humano->Comer();
$humano->FazerAniversario();
$humano->Trabalhar();
$humano->MostrarDados();


echo Ferramentas::$pi;

Ferramentas::CalcularDescontoFolha();

?>