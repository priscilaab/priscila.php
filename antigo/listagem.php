<?php
// Utilize o require_once() para importar a página com arrays
 require_once('arrays1.php')

 //print_r($funcionarios);
     /*concatenado:
     <li class="list-group-item"><?=$v['nome'].' | '.$v['cargo'];?></li>
     com dois php:
    <li class="list-group-item"><?=$v['nome'];?> | <?=$v['cargo'];?></li>*/ 
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exemplo Bootstrap</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Funcionários</h1>
    
    <ul class="list-group">
        <?php foreach($funcionarios as $v){?>
      <li class="list-group-item"><?=$v['nome'].' | '.$v['cargo'];?></li>
      <?php }?>
    </ul>
    
    <h1>Produtos</h1>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Preço</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($produtos as $v){ ?>
        <tr>
          <td><?=$v['id'];?></td>
          <td><?=$v['nome'];?></td>
          <td>R$<?=$v['preco'];?></td>
        </tr>
        <?php }?>
      </tbody>
    </table>
  </div>
 
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>