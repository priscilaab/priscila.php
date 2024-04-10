<?php
$produtos = array(
    array("id" => 1, "nome" => "Smartphone XYZ", "descricao" => "Um smartphone avançado com câmera de alta resolução e tela OLED.", "foto" => "https://picsum.photos/200", "preco" => 999.99),
    array("id" => 2, "nome" => "Notebook ABC", "descricao" => "Um notebook potente com processador de última geração e SSD de alta velocidade.", "foto" => "https://picsum.photos/200", "preco" => 1499.99),
    array("id" => 3, "nome" => "Fone de Ouvido Bluetooth", "descricao" => "Fone de ouvido sem fio com cancelamento de ruído e longa duração da bateria.", "foto" => "https://picsum.photos/200", "preco" => 149.50),
    array("id" => 4, "nome" => "Mochila Executiva", "descricao" => "Uma mochila elegante e espaçosa, ideal para profissionais em movimento.", "foto" => "https://picsum.photos/200", "preco" => 79.99),
    array("id" => 5, "nome" => "Câmera Fotográfica DSLR", "descricao" => "Uma câmera profissional com sensor de alta resolução e lentes intercambiáveis.", "foto" => "https://picsum.photos/200", "preco" => 1299.99),
);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Produtos</h1>
        <div class="row">
            <!-- Com base no modelo abaixo, liste os produtos do array mencionado no topo da página. -->
            <div class="col-md-4">
                <div class="card"><img src="https://picsum.photos/200" class="card-img-top" alt="Produto 1">
                    <div class="card-body">
                        <h5 class="card-title">Produto 1</h5>
                        <p class="card-text">Descrição.</p>
                        <p class="card-text">Preço: R$ XX,XX</p>
                    </div>
                </div>
            </div>
            <!-- Segundo Modelo -->
            <div class="col-md-4">
                <div class="card"><img src="https://picsum.photos/200" class="card-img-top" alt="Produto 2">
                    <div class="card-body">
                        <h5 class="card-title">Produto 2</h5>
                        <p class="card-text">Descrição.</p>
                        <p class="card-text">Preço: R$ XX,XX</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>