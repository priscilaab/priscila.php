<?php
/*
    ___   __  _       _     __          __   
   /   | / /_(_)   __(_)___/ /___ _____/ /__ 
  / /| |/ __/ / | / / / __  / __ `/ __  / _ \
 / ___ / /_/ /| |/ / / /_/ / /_/ / /_/ /  __/
/_/  |_\__/_/ |___/_/\__,_/\__,_/\__,_/\___/
 
** Leia os enunciados e responda abaixo dos comentários.
** Link para consulta: https://www.php.net/manual/pt_BR/ref.array.php
*/
// ===============================================================
/*
ATIVIDADE EXEMPLO:
- Crie um array simples com CINCO números;
- Pesquise uma função ordene o array;
- Exiba o array por meio do Foreach;
- Pesquise uma função que some todos os elementos do array e atribua em uma variável.
- Exiba a soma dos elementos do array.
*/
// RESPOSTA:
$arrayNumeros = [10, 0, 4, 2, 1];
sort($arrayNumeros);
foreach($arrayNumeros as $v){
    echo $v . "<br>";
}
$somaNumeros = array_sum($arrayNumeros);
echo $somaNumeros;
echo "<br><br>";
// ===============================================================
/*
ATIVIDADE 1:
- Crie um array simples com quatro nomes de lanhces;
- Exiba o array por meio de um laço FOR;
- Exiba o array por meio do Foreach;
- Utilize uma função do PHP para mostrar quantos itens existem no array.
*/
// RESPOSTA:
$lanches = ["X-Bacon", "X-Tudo", "X-Filé", "X-Salada"];

for($i = 0; $i < count($lanches); $i++){
   echo $lanches[$i] . "<br>";
    }

    echo "<br>";
    
    foreach($lanches as $lanche){
    echo $lanche . "<br>";
    }

    echo "<br>";
    echo "Número de itens: " . count($lanches);
    echo "<br><br>";
// ===============================================================
/*
ATIVIDADE 2:
Utilizando o mesmo array criado no exercício anterior:
- Adicione mais dois lanches ao final do Array (Append);
- Adicione dois lanches no início do Array (Unshift/Prepend);
- Exiba o array por meio do Foreach;
*/
// RESPOSTA:
array_push($lanches,"X-Carijó","X-Carijo Egg");
array_unshift($lanches,"X-Max","X-Max Tudo");

foreach($lanches as $v){
    echo "$v <br>";
}
echo"<br><br>"; 
// ===============================================================
/*
ATIVIDADE 3:
Utilizando o mesmo array utilizado no exercício anterior:
- Pesquise na documentação do PHP uma função que inverta a ordem dos elementos no Array;
- Atribua o array invertido em um novo array chamado $lanchesInvertido;
- Exiba o array $lanchesInvertido com o Foreach.
 
*/
// RESPOSTA:
 $lanchesInvertido = array_reverse($lanches);
 foreach ($lanchesInvertido as $v){
    echo "$v <br>";
 }
 echo"<br><br>"; 
// ===============================================================
 
// ===============================================================
/*
ATIVIDADE 4:
- Analise o seguinte exemplo de Array: https://i.imgur.com/w7SStAm.png
 
- Veja a seguinte tabela de produtos: https://i.imgur.com/20vohPB.png
-- Elabore um array com os dados da tabela de produtos supracitada;
-- Utilize o Foreach para mostrar todos os dados da tabela, inclusive as chaves.
 
*/
// RESPOSTA:
 $tabela = [
    ["idProduto"=>253,
    "nomeProduto"=>"Curso PHP Básico",
    "preco"=>299.99,
    "descricao"=>"Lorem Ipsum",
    "estoque"=>100
 ],
 ["idProduto"=>222,
    "nomeProduto"=>"Livro Deep Learning com Python",
    "preco"=>150.99,
    "descricao"=>"Lorem Ipsum",
    "estoque"=>50
 ],
 ["idProduto"=>273,
    "nomeProduto"=>"Livro Algoritmos Genéticos",
    "preco"=>89.99,
    "descricao"=>"Lorem Ipsum",
    "estoque"=>17
 ],
 ["idProduto"=>242,
    "nomeProduto"=>"Livro Tensorflow para Iniciantes",
    "preco"=>199.99,
    "descricao"=>"Lorem Ipsum",
    "estoque"=>2
 ]
];

foreach ($tabela as $linha){
foreach($linha as $k => $v){
    echo "$k : ". $v."<br>";
}
echo "============<br>";
}

/*
        ______                                 _           _ _           
        (____  \                _              | |         | | |          
        ____)  ) ___  ____    | |_   ____ ____| | _   ____| | | _   ___  
        |  __  ( / _ \|    \   |  _) / ___) _  | || \ / _  | | || \ / _ \ 
        | |__)  ) |_| | | | |  | |__| |  ( ( | | |_) | ( | | | | | | |_| |
        |______/ \___/|_|_|_|   \___)_|   \_||_|____/ \_||_|_|_| |_|\___/                                                                     
*/
?>