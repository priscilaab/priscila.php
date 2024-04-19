<?php

$produtos = ['Coxinha de Frango',
            'Empada de Frango',
            'Bolinha de Queijo',
            'Esfirra de Brocolis'];

// pegar o id da URL:

$id = $_GET['id'];

// Criar o cookie:
setcookie("visualizado", $produtos[$id], time()+3600*24*3);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
</head>
<body>
    <h1><?=$produtos[$id];?></h1>
    <p>
        <a href="index.php"> <- Voltar</a>
    </p>
</body>
</html>