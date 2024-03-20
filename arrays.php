<?php
echo "<h1>VETORES</h1><br>";
echo "<br>================================================<br>";
echo "FOR<br>";
echo"<br>===================<br>";
$nomes = ["Priscila", "Britney", "Lanna", "Wynnona"]; 

echo $nomes[1] . "<br>";
echo $nomes[2] . "<br>";
echo "<br>==================<br>";

for ($i=0; $i<=3; $i++){
    echo $nomes[$i] . "<br>";
}
echo "<br>==================<br>";
echo count ($nomes);

echo "<h2>Exercícios Supervisionados</h2><br>";

//Exercício 1
$filmes = ["Mulholland Drive","Bruxa de blair","O Diabo Veste Prada","Mudança de Hábito","Dogville"]; 

echo "<p>Respostas:</p><br>";
for ($i=0+1; $i<count($filmes); $i++){
    echo "Filme $i:"." ". $filmes[$i] ."<br>";
}
echo "<br><br>";
$idades = [36,42,27,51,17];

for ($i=0+1; $i<count($idades); $i++){
    echo "Idade $i="." ". $idades[$i]."<br>";
}
echo "<br><br>";

$notas = ["9.5","8","8.5","7","7"];
//echo array_sum($notas)/5;
//mais completo:
echo "Média:".array_sum($notas)/count($notas);
echo "<br><br>";
echo "<br>================================================<br>";


echo "FOREACH:<br>";
echo "<br>=======================<br>";
//
$lanches = ["Coxinha","Pastel","Fritas","Pão de Queijo"]; 
//Mostrar:
foreach ($lanches as $v){
    echo "$v <br>";
} 
echo "<br>=======================<br>";
$imovel = [
"tipo_imovel" => "Casa",
"bairro" => "Crispim",
"valor" => "300000",
"cidade" => "Pindamonhangaba",
"tipo" => "Venda"
]; 
//echo $imovel ["bairro"]; 

foreach($imovel as $v){
    echo "$v <br>";
}
echo "<br>=======================<br>";

$funcionario = [
    "ID"=>667,
    "Nome"=>"Jorge Pimps",
    "Idade"=>41,
    "Salário"=>5400.36,
    "Função"=>"Operador de Retroescavadeira"
];

foreach ($funcionario as $k => $v){
   echo "$k : $v <br>";
}


$dados = [
   [ "ID"=>667,
    "Nome"=>"Jorge Pimps",
    "Idade"=>41,
    "Salário"=>5400.36,
    "Função"=>"Operador de Retroescavadeira",
    "Pets"=>["Bob","Cornelios","Teobaldo"]
],
[
    "ID"=>668,
    "Nome"=>"Carlos Humiatá",
    "Idade"=>51,
    "Salário"=>6400.16,
    "Função"=>"Operador de Guincho"
],
[
    "ID"=>669,
    "Nome"=>"Antonio Ferreira",
    "Idade"=>33,
    "Salário"=>7800.00,
    "Função"=>"Operador de Retroescavadeira"
]
];

echo $dados[0]["Pets"][1];
echo "<br>=======================<br>";

foreach($dados as $v){
    echo $v["ID"]."<br>". 
    strtoupper($v["Nome"])."<br>". 
    $v["Idade"]."<br>". 
    $v["Salário"]."<br>". 
    $v["Função"]."<br>"."<br>"; 
}
//Sempre consultar a documentação para funções nativas:
echo substr("abcfde",1,4);
echo "<br><br>";
// Example 1
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo "<br>";
echo $pieces[1]; // piece2
echo "<br><br>";
// Example 2
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user; // foo
echo "<br>";
echo $pass; // *
echo "<br><br>";

//$nomes = "Priscila Nunes";
//echo explode (" ", $nome)[0]."<br>";
//echo explode (" ", $nome)[1];
?>