<?php

//variáveis com propriedades da página:
$titulo_pagina = "Listagem de Funcionários";
$funcionario_logado = "Gertrudes";
$funcionarios = ["Pedro", "Lorran", "Davi", "Gustavo", "Amanda", "Ana Beatriz", "Inaldo"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo_pagina; ?></title>
</head>

<body>
    <h1>Olá <?= $funcionario_logado; ?>!</h1>
    <h2>Listagem de Funcionários</h2>
    <ul>
        <?php foreach ($funcionarios as $nome) { ?>
            <li><?= $nome ?></li>
        <?php } ?>
    </ul>
    <h2>Exemplo 2:</h2>
    <ul>
        <?php
        foreach ($funcionarios as $nome) {
            echo "<li>$nome</li>";
        }
        ?>
    </ul>
</body>

</html>