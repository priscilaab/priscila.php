<?php

$nome = "Priscila";
$sobrenome = "Barbosa Nunes";
//echo = print
//echo $nome;

// Formas de concatenar:
//echo $nome ." ". $sobrenome;
//echo "$nome $sobrenome";
echo "<h1>Olá $nome $sobrenome!</h1> <br>";
echo "<p>Bem vindo ao site!</p>";

?>
<?php

$a = 2;
$b = 6;
$c = $a + $b;
 
echo "<p>A soma é $c.</p><br>";

$d = $a * $b;

echo "<p>A multiplicação é $d</p><br>";

$e = $a / $b;

echo "<p>A divisão é $e</p><br>";

$f = $a - $b;

echo "<p>A subtração é $f</p><br>";
?>

<?php
$g = 2;
$h = 5;
$i = 3;

echo "A soma é ".$g+$h+$i;
echo "<br>";
echo "A multiplicação é ".$g*$h*$i;
echo "<br>";
echo "A média é ".($g+$h+$i)/3;

$a = 2;
$b = 2.0;
//lógica: true ou false:
echo $a == $b;
echo"<br>";
?>

<?php
/*
Altura >= 1.80 -> Pode entrar
Altura <= 1.20 -> Tome mais biotonico
*/ 
echo "<br>";
$altura = 1.20;

/*if ($altura >= 1.80){
    echo "Pode entrar!";
}else{
    echo "Não pode entrar!";
}*/
if ($altura >= 1.80){
    echo "Pode entrar!";
}else if($altura <= 1.20){
    echo "Tome mais biotonico fontoura!";
}else{
    echo "Não pode entrar!";
}
?>

<?php
echo "<h2>Exercicios Supervisionados</h2>";
echo "<br>";
// &&=and ||=or
//Atividade 1:
$idade = 36;

if ($idade >= 18){
    echo "Maior de idade!";
}else{
    echo "Menor de idade!";
}
echo "<br>=======================<br>";

//Atividade 2:
$idade = 12;
$saldo = 120;

if($idade >= 30 and $saldo >= 200){
    echo "Desconto aprovado!";
}else{
    echo "Tente de novo em outra oportunidade!";
}
echo"<br>==========================<br>";

//Atividade 3:
$peso = 62.0;
$altura = 1.68;

$imc = $peso / ($altura*$altura); 

//echo $imc<18.5 ? "Abaixo do peso" : $imc<24,9 ? "Peso Normal" : "Sobrepeso";
if ($imc < 18.5){
    echo "Abaixo do peso!";
}else if($imc=18.5 && $imc<24.9){ //simplificado: ($imc< 24.9)
    echo "Peso Normal.";
}else{
    echo "Sobrepeso!";
} 
?>

<?php 
echo"<h3><br>===================================<br><h3>";
echo"<h3>Laço de repetição<h3>";

//laço for:
for ($i=0; $i<10; $i++){
    echo "O valor de i é $i <br>";
}
echo "<br>";
for ($i=10; $i>0; $i--){
    echo "O valor de i é $i <br>";
}
echo "<br>";
for ($i=0; $i<=10; $i+=2){
    echo "O valor de i é $i <br>";
}
echo "<h2>Exercicios Supervisionados</h2>";
echo "<br>";

//exercicio 1:
for ($i=20; $i<=50; $i++){
    echo "$i <br>";
}
echo"<br>==========================<br>";
for ($i=50; $i>=20; $i--){
    echo "$i <br>";
}
echo"<br>==========================<br>";
for ($i=1; $i<=10; $i++){ //Ou: ($i=5; $i<=50; $i+=5){echo "$i<br>"}
    echo "$i x 5=". $i*5 ."<br>";
}
echo"<br>==========================<br>";
//exercicio2:

for ($i=0; $i<=100; $i++){
    if($i % 2==0){
        echo"Número Par"." ". $i . "<br>"; //contador alternado: echo $i%2==0 ? "$i<br>" : "";
    }
}

/*for ($i="a"; $i<="z"; $i++){
    echo "$i<br>";
}*/

?>