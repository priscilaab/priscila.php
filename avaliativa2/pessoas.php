<?php 

require_once('Pessoa.class.php');

//Criando novos objetos da classe Pessoa:
$p1 = new Pessoa("Britney", 48, "Cantora");
$p2 = new Pessoa("Winonna", 42, "Atriz");


//Mostar Valores:
$p1->Apresentar();
$p2->Apresentar();

?>