<?php 

session_start();
 if(!isset($_SESSION['usuario'])){
    header("Location ../index.php");
    die();
 }

 // Verificar se a página está sendo verificada por POST
 if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //Importar o arquivo da classe:
    require_once('classes/Categoria.class.php');
    //Criar o objeto do tipo Categoria:
    $c = new Categorias();
    $c->nome = strip_tags($_POST['nome']);
    //Verificar o tamanho da string:
        if (strlen($c->nome) > 2 ){
    //Cadastrar:
    if($c->Cadastrar() == 1){
        //Deu certo o cadastro!
        //Retorno ao painel.php:
        header("Location: ../painel.php?sucesso=categoriaok");
        die();
    }else{
        header("Location: ../painel.php?erro=categoriafalha");
        die();
    }
 }else{
    header("Location: ../painel.php?erro=categoriafalha");
    die();
 }
}else{
echo "Essa página deve ser carregada por POST!";
}
 

?>