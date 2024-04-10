<?php 

require_once('classes/Usuario.class.php');
//$usuario = new Usuario();
//$usuario->Listar();
//print_r($usuario->Listar());
//$tabela = $usuario->Listar();
//print_r($tabela);


$u = new Usuario();
$resultado = $u->Listar();
//print_r para conferir se as informoçãoes estão chegando, serão mostrads em formas 
//de array 
//print_r($resultado);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>

<body>
    <form action="actions/cadastrar_usuario.php" method="POST">
        <p>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" placeholder="Nome Completo" />
        </p>
        <p>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" placeholder="Email" />
        </p>
        <p>
            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha" placeholder="Senha" />
        </p>
        <p>
            <input type="submit" value="Cadastrar" />
        </p>
    </form>

<!-- Tabelinha para mostrar os usuários -->
<table border="1">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Senha (SHA256)</th>
    </tr>
    <?php foreach($resultado as $linha){?>
        <tr>
            <td><a href="perfil.php?id=<?=$linha['id']; ?>"><?=$linha['nome_completo']; ?></a></td>
            <td><?=$linha['email']; ?></td>
            <td><?=$linha['senha']; ?></td>
        </tr>
        <?php } ?>
</table>

</body>

</html>