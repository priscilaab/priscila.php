<?php 
//echo $_GET['nome'];
//http://localhost/priscila.php/projeto1/perfil.php?nome=Livia
//print_r($_GET);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
<?php if(isset($_GET['nome']) and isset($_GET['idade'])){ ?>
        <h1>Perfil de <?=$_GET['nome']; ?></h1>
        <p><?=$_GET['nome']; ?> tem <?=$_GET['idade']; ?> anos de idade.</p>
    <?php }else{ ?>
        <h1>Informação não encontrada!</h1>
    <?php } ?>
</body>
</html>