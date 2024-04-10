<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <form action="validar.php"  method="POST">
<!--method= sempre usar POST, pq o GET mostra as informações inseridads no input no navegador
$_POST e $_GET é uma forma de passar informações entre paginas
formularios enviados por GET servem para enviar informações que podem ser compartilhadas como youtube, google, fale conosco, 
já o Post é usado para passar informações de formularios onde há senha e informações pessoais que não possam ser compartilhadas-->
        <p>
            <label for="username">Username: </label>
            <input type="text" id="username" name="username" />
        </p>
        <p>
            <label for="senha">Senha: </label>
            <input type="password" id="senha" name="senha" />
        </p>
        <p>
            <input type="submit" value="Entrar"/>
        </p>

    </form>

</body>

</html>