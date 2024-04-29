<?php 

session_start();
if (!isset($_SESSION['usuario'])) {
    // Voltar pro login:
    header("Location: index.php");
    die();
}

require_once('actions/classes/Categoria.class.php');
$c = new Categorias();
$lista_categorias = $c->Listar();

if(isset($_GET['id'])){
require_once('actions/classes/Produto.class.php');
$p = new Produtos();
$p->id = $_GET['id'];
$resultado = $p->ListarPorID();
if(count($resultado) == 1){
    $resultado = $resultado[0];
    //print_r($resultado);
}else{
    $erro = 1;
}
}else{
    $erro = 1;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulário de Edição</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Formulário de Edição</h1>
    <form action="actions/editar_produto.php" enctype="multipart/form-data" method="POST">
    <input type="hidden" id="id" name="id" value="<?= $resultado['id'] ?>">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" value="<?=$resultado['nome'] ?>" class="form-control" id="nome" name="nome">
      </div>
      <div class="form-group">
                            <label for="fotoProduto">Foto</label>
                            <input name="foto" type="file" class="form-control-file" id="fotoProduto">
                        </div>
      <div class="form-group">
        <label for="descricao">Descrição:</label>
        <input type="text" value="<?=$resultado['descricao'] ?>" class="form-control" id="descricao" name="descricao">
      </div>
      <div class="form-group">
                            <label for="categoriaProduto">Categoria</label>
                            <select name="id_categoria" class="form-control" id="categoriaProduto">
                                <?php foreach ($lista_categorias as $l) { ?>
                                    <option value="<?= $l['id']; ?>"><?= $l['nome']; ?></option>
                                <?php } ?>
                            </select> <br>
                        
                        </div>
      <div class="form-group">
        <label for="estoque">Estoque:</label>
        <input type="number" value="<?=$resultado['estoque'] ?>" class="form-control" id="estoque" name="estoque">
      </div>
      <div class="form-group">
                            <label for="precoProduto">Preço</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">R$</span>
                                </div>
                                <input name="preco" type="number" class="form-control" id="precoProduto" placeholder="Digite o preço">
                            </div>
                        </div>
      <button type="submit" class="btn btn-warning">Editar</button>
    </form>
  </div>
 
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>