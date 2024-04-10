<?php

// Verificar se a página está sendo carregada por POST:

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('../classes/Usuario.class.php');
    $u = new Usuario();
    // Atribuindo as infos do form no objeto do tipo Usuario:
    $u->nome_completo = $_POST['nome'];
    $u->email = $_POST['email'];
    $u->senha = $_POST['senha'];

    try {
        if ($u->Cadastrar() == 1) {
            echo "Usuário cadastrado com sucesso!";
        } else {
            echo "Falha ao cadastrar usuário";
        }
    } catch (Exception $e) {
        echo "Falha ao cadastrar.<br>";
        echo $e->getMessage();
        // echo $e->getCode() para fazer o tratamento do codigo:
        //faz se um arquivo com todos os erros que poderao aparecer 
        //e quano esse erro aparecer chama o arquivo com a mensagem do codigo
    }
} else {
    echo "<h3>Essa página deve ser carregada por POST.</h3>";
}
