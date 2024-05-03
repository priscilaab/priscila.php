<?php 
session_start();
//Validar sessão:
if(!isset($_SESSION['usuario'])){
    header("Location: ../index.php");
    die();
}

if($_SERVER["REQUEST_METHOD"] === 'POST'){
    //Veriicar se valores estão chegando:
   /* 
    print_r($_POST);
    echo"<br>";
    print_r($_FILES['foto']);
    echo"<br>";
    print_r($_SESSION['usuario']);
    */
    require_once("classes/Produto.class.php");
$p = new Produtos();
$p->nome = strip_tags($_POST['nome']);
$p->descricao = strip_tags($_POST['descricao']);
$p->estoque = strip_tags($_POST['estoque']);
$p->preco = strip_tags($_POST['preco']);
$p->id_categoria = strip_tags($_POST['id_categoria']);
$p->id_resp = $_SESSION['usuario']['id'];
//Verificar se existe uma foto ou não setado input['foto']:
    if($_FILES['foto']['size'] == 0){
        //Não tem foto!
        //Cadastrar no banco:
        if($p->CadastrarSemFoto() == 1){
            //Deu certo o cadastro!
            header("Location: ../painel.php?sucesso=produtook");
            die();
        } else {
            header("Location: ../painel.php?erro=produtofalha");
            die();
        }
    }else{
        // Se houver foto no input:
        $ext = pathinfo($_FILES['foto']['name'] ,PATHINFO_EXTENSION);
        $novo_nome = hash_file('md5', $_FILES['foto']['tmp_name']).".".$ext;
        //echo $novo_nome;
        $pasta = "../fotos/";
           // Array com tipos de arquivos validos:
           $validos = ['jpg', 'png', 'webm', 'jpeg', 'jfif', 'avif'];

           if(in_array($ext, $validos)){
            
        if(move_uploaded_file($_FILES['foto']['tmp_name'], $pasta . $novo_nome)){
            // Se der certo o upload:
            $p->foto = $novo_nome;
            // Cadastrar:
            if($p->CadastrarComFoto() == 1){
                // Deu certo!
                header("Location: ../painel.php?sucesso=produtook");
            die();
        } else {
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