<?php 

session_start();
// Verificar se a sessão não existe:
    if(!isset($_SESSION['usuario'])){
        // Voltar pro login:
        header("Location: login.php");
        die(); // ou exist();
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Restrita</title>
</head>
<body>
    <h1>Essa é a sua Area Restrita</h1>
    <p>Olá, <?=$_SESSION['usuario'][0]?>!</p>
</body>
</html>