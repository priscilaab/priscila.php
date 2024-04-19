<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Lista de Produtos</h1>
    
    <ul>
        <li><a href="produto.php?id=0">Coxinha de Frango</a></li>
        <li><a href="produto.php?id=1">Empada de Frango</a></li>
        <li><a href="produto.php?id=2">Bolinha de Queijo</a></li>
        <li><a href="produto.php?id=3">Esfirra de Brocolis</a></li>
    </ul>

    <?php if(isset($_COOKIE['visualizado'])){  ?>
        <h3>Último produto visualizado:</h3>
        <p><?=$_COOKIE['visualizado']?></p>
    <?php } ?>
    
</body>
</html>