<?php
//try serve para desviar de um erro
    //try{ 
        //o catch é o caminho que a aplicação vai seguir 
        // }catch(Exception $e){
    //    $erro = 1;
   // }
   
$erro = 0;

if(isset($_GET['id'])){
    // fazer coisas;
    require_once('classes/Usuario.class.php');
    $u = new Usuario();
    $u->id = $_GET['id'];
    
       $resultado = $u->ListarPorId(); 
       if(count($resultado) == 1){
        $resultado = $resultado[0];
    }else{
        $erro = 1;
    }
    //print_r($resultado);
    //echo $resultado[0]['nome_completo'];
}else{
    $erro = 1;
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if($erro == 0){ ?>
    <title>Perfil de <?=$resultado['nome_completo'];?></title>
    <?php }else{?>
        <title> ERRO!</title>
        <?php } ?>
</head>
<body>
<?php if($erro == 0){ ?>
    <h1><?=$resultado['nome_completo'];?></h1>
    <p>Email: <?=$resultado['email'];?></p>
    <p>Senha: <?=$resultado['senha'];?></p>
    <?php }else{?>
        <h3> ERRO: Usuário não encontrado!</h3>
        <?php } ?>
</body>
</html>
