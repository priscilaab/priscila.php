<?php

// Verificar a sessão:
    session_start();
    if(!isset($_SESSION['usuario'])){
      // Voltar pro login:
      header("Location: ../index.php");
      die();
    }

// Verificar se a pagina está sendo carregada por POST
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once('classes/Produto.class.php');
    $p =  new Produtos();
    $p->nome = strip_tags($_POST['nome']);
    $p->descricao = strip_tags($_POST['descricao']);
    $p->estoque = strip_tags($_POST['estoque']);
    $p->preco = strip_tags($_POST['preco']);
    $p->id_categoria = strip_tags($_POST['id_categoria']);
    $p->id = strip_tags($_POST['id']);
    $p->id_resp = $_SESSION['usuario']['id'];
    if($_FILES['foto']['size'] == 0){
        //Não tem foto!
        //Cadastrar no banco:
        if($p->EditarSemFoto() == 1){
            //Deu certo o cadastro!
            header("Location: ../painel.php");
            die();
        }
    }else{
        // Se houver foto no input:
        $ext = pathinfo($_FILES['foto']['name'] ,PATHINFO_EXTENSION);
        $novo_nome = hash_file('md5', $_FILES['foto']['tmp_name']).".".$ext;
        //echo $novo_nome;
        $pasta = "../fotos/";
           // Array com tipos de arquivos validos:
           $validos = ['jpg', 'png', 'webm', 'jpeg', 'jfif'];

           if(in_array($ext, $validos)){
            
        if(move_uploaded_file($_FILES['foto']['tmp_name'], $pasta . $novo_nome)){
            // Se der certo o upload:
            $p->foto = $novo_nome;
            // Cadastrar:
            if($p->EditarComFoto() == 1){
                // Deu certo!
                header("Location: ../painel.php?sucesso=produtook");
                die();
            }else{
                header("Location: ../painel.php?erro=produtofalha");
                die();
            }
        }else{
            // se der errado :(
                header("Location: ../painel.php?erro=produtofalha");
                die();
        }

    }else{
        header("Location: ../painel.php?erro=produtofalha");
                die();
           }
        }

}else{
    echo "Essa página deve ser carregada por POST!";
}

?>