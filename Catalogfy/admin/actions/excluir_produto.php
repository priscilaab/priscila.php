<?php 

// Verificar a sessão:
    session_start();
    if(!isset($_SESSION['usuario'])){
      // Voltar pro login:
      header("Location: ../index.php");
      die();
    }

if(isset($_GET['id'])){
    require_once('classes/Produto.class.php');
    $p = new Produtos();
    $p->id = $_GET['id'];
    if($p->Excluir() == 1){
        //Redirecionar:
        header("Location: ../painel.php?sucesso=produtook");
        die();
    }else{
        header("Location: ../painel.php?erro=produtofalha");
        die();
    }
}else{
    echo '<h3>O ID deve ser informado na URL.</h3>';
}

?>