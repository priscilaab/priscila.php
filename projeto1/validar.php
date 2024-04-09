<?php

//Verificar se a página está sendo carregada por POST:

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Seu username é: " . $_POST['username'];
    echo "<br>Sua senha é: " . $_POST['senha'];
} else {
    echo "Essa página só pode ser carregada por POST.";
}

?>