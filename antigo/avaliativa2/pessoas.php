<?php 

require_once('Pessoa.class.php');

// Criando novos objetos da classe Pessoa:
$p1 = new Pessoa("Britney", 42, "Cantora");
$p2 = new Pessoa("Winona", 52, "Atriz");


// Exibindo Valores:
$p1->Apresentar();
$p2->Apresentar();

?>