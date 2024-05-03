<?php
// Painel de administração
session_start();
if (!isset($_SESSION['usuario'])) {
    // Voltar pro login:
    header("Location: index.php");
    die();
}
//Puxar as categorias:
require_once('actions/classes/Categoria.class.php');
$c = new Categorias();
$lista_categorias = $c->Listar();
//print_r($lista_categorias);

require_once('actions/classes/Produto.class.php');
$c =  new Produtos();
$tabela = $c->ListarViewProduto();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de Produtos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        body {
            background: #f8f9fa;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Gerenciamento de Produtos</h1>
        <div class="row mb-3">
            <div class="col d-flex justify-content-end">
                <button type="button" class="btn btn-success mx-1" data-toggle="modal" data-target="#modalCadastro"><i class="bi bi-plus-circle"></i> Cadastrar Produto</button>
                <a class="btn btn-danger mx-1 text-white" href="logout.php"><i class="bi bi-box-arrow-right"></i> Sair</a>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Categoria</th>
                    <th>Estoque</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tabela as $linha) { ?>
                    <tr>
                        <td><?= $linha['id']; ?></td>
                        <td><img src="fotos/<?= $linha['foto']; ?>" alt="<?= $linha['foto']; ?>" style="max-width: 170px; max-height: 170px;"></td>
                        <td><?= $linha['nome']; ?></td>
                        <td><?= $linha['descricao']; ?></td>
                        <td><?= $linha['categoria']; ?></td>
                        <td><?= $linha['estoque']; ?></td>
                        <td>R$<?= $linha['preco']; ?></td>
                        <td><a class="btn btn-warning mt-2" href="editar.php?id=<?= $linha['id']; ?>">Editar</a> <a class="btn btn-danger mt-2" a href="#" onclick="confirmaExcluir()">Excluir</a></td>
                    <!-- tirados do botao excluir(levavam para modal): data-toggle="modal" data-target="#modalExcluirProduto href="excluir_produto.php<(?)= $linha['id'];?>" -->
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>

    <!-- Modal de Cadastro -->
    <div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="modalCadastroLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="actions/cadastrar_produto.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCadastroLabel">Cadastro de Produto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="nomeProduto">Nome</label>
                            <input name="nome" type="text" class="form-control" id="nomeProduto" placeholder="Digite o nome do produto">
                        </div>
                        <div class="form-group">
                            <label for="fotoProduto">Foto</label>
                            <input name="foto" type="file" class="form-control-file" id="fotoProduto">
                        </div>
                        <div class="form-group">
                            <label for="descricaoProduto">Descrição</label>
                            <textarea name="descricao" class="form-control" id="descricaoProduto" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="categoriaProduto">Categoria</label>
                            <select name="id_categoria" class="form-control" id="categoriaProduto">
                                <?php foreach ($lista_categorias as $l) { ?>
                                    <option value="<?= $l['id']; ?>"><?= $l['nome']; ?></option>
                                <?php } ?>
                            </select> <br>
                            <div class="row">
                                <div class="col d-flex justify-content-end">
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalAddCategoria">Adicionar Categoria</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="estoqueProduto">Estoque</label>
                            <input name="estoque" type="number" class="form-control" id="estoqueProduto" placeholder="Digite a quantidade em estoque">
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

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal de adicionar Categoria:-->
    <div class="modal fade" id="modalAddCategoria" tabindex="-1" role="dialog" aria-labelledby="modalAddCategoriaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <form action="actions/cadastrar_categorias.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalAddCategoriaLabel">Adicionar Categoria</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="nomeCategoria">Nome da Categoria</label>
                            <input name="nome" type="text" class="form-control" id="nomeCategoria" placeholder="Digite o nome da categoria">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
 <!-- Modal Editar 
 <div class="modal fade" id="modaleditar" tabindex="-1" role="dialog" aria-labelledby="modaleditar" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modaleditar">Editar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input class="form-control form-control-lg nomeproduto" type="text">
                    <input class="form-control form-control-lg descricaoproduto" type="text">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Modal de Excluir Produto: -->
    <div class="modal fade" id="modalExcluirProduto" tabindex="-1" role="dialog" aria-labelledby="modalAddCategoriaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" role="document">
                <form action="actions/excluir_produto.php?id=<?= $linha['id']; ?>" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalExcluirProduto">Deseja EXCLUIR?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <p>Realmente deseja excluir o produto do banco de dados?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger" href="actions/excluir_produto.php?id=<?= $linha['id']; ?>">Excluir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        // Modal Editar:
        $('#modaleditar').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var nome = button.data('nome')
            var descricao = button.data('descricao')
            var modal = $(this)
            modal.find('.nomeproduto').val(nome)
            modal.find('.descricaoproduto').val(descricao)
        })
    </script>
    <!-- Importar o SweetAlert -->
    <?php include_once('includes/alertas.include.php');  ?>

    <script>
        function confirmaExcluir(id){
            Swal.fire({
                title: "Tem certeza?",
                text: "Tem certeza que deseja remover este produto?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#aaa",
                confirmButtonText: "Sim, excluir!",
                cancelButtonText: "Não",
                showClass: {
                    popup: `
                    animate__animated
                    animate__shakeX
                    `
                },
                hideClass: {
                    popup: `
                    animate__animated
                    animate__fadeOut
                    animate__fast
                    `
                }
            }).then((result) => {
                if (result.isConfirmed) {
                   // Swal.fire({
                         // Redirecionar para excluir.php:
                    window.location.href = 'actions/excluir_produto.php?id=<?= $linha['id']; ?>';
                    //title: "Deleted!",
                       // text: "Produto escluído com sucesso!",
                       // icon: "success"
                   // });
                }
            }); 
        }
    </script>

</body>

</html>