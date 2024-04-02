<?php 

require_once('Veiculo.class.php');

// Criando novo objeto da classe Veiculo:
$v1 = new Veiculo("Peel", "P50", 1965, "Azul", 1200);

// Exibindo Métodos com os novos valores:
$v1->exibirInformacoes();
$v1->calcularIdade();
$v1->calcularDepreciacao();
$v1->ehNovo();
$v1->pintarVeiculo("Branco");
$v1->exibirInformacoes();

?>