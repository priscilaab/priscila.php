<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // Verificar se o email e senha estão corretos:
        // Login de mentirinha:
        if($_POST['email'] == "admin@admin.com" and $_POST['senha'] == 'admin'){
            session_start();
            $_SESSION['usuario'] = ['Robson', 'admin@admin.com'];
            // Redirecionar pro painel.php:
            header("Location: painel.php");
        }else{
            echo "Email ou senha incorretos";
        }
}else{
    echo "Essa página deve ser carregada por POST.";
}


?>
