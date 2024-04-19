<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="validar_login.php" method="POST">
        <p>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" />
        </p>
        <p>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" />
        </p>
        <p>
            <input type="submit" value="Entrar" />
        </p>
    </form>
</body>

</html>