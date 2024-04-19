<?php

//PRISCILA BARBOSA
//DANTE FERNANDES


// Variável que define o local de armazenamento do arquivo:
$target_dir = "imagens/";
$target_file = $target_dir.basename($_FILES["arquivo"]["name"]);

// Var contador de erro:
$uploadOk = 1;

// Var que extrai a extensão:
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Verifica se o arquivo é uma imagem:
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["arquivo"]["tmp_name"]);
    if ($check !== false) {
        echo "O arquivo é uma imagem - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "O arquivo não é uma imagem.";
        $uploadOk = 0;
    }
}

// Faz a verificação da extensão do arquivo
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" && $imageFileType != "jfif"
) {
    echo "<h3>ERRO: apenas arquivos JPG, JPEG, PNG e GIF são permitidos.<br></h3>";
    $uploadOk = 0;
}

// Faz a verificação do contador 
if ($uploadOk == 0) {
    echo "<h1>Erro: não foi possivel o upload da imagem.</h1>";
} else {
    if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], $target_file)) {
        echo "<h3><br>Arquivo enviado com sucesso.<br></h3>";
        echo "Arquivo: " . $_FILES['arquivo']['name'] . "<br>";
        echo "Tipo : " . $_FILES['arquivo']['type'] . "<br>";
        echo "Tamanho : " . $_FILES['arquivo']['size'] . "<br>";
        echo "Extensão: " . $imageFileType . "<br>";
        echo "<br><br>";
        echo '<img src="' . $target_file . '" alt="Uploaded Image">';
    } else {
        echo "<h3>Erro: Não foi possível enviar a imagem.</h3>";
    }
}

?>
