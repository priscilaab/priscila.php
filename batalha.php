<?php

require_once('SuperHeroi.class.php');

$heroi = new SuperHeroi("Super Estevinho", "Estevao");
$heroi->ExibirStatus();
$heroi->Atacar();
$heroi->Atacar();
$heroi->ExibirStatus();

for($i=0; $i<=10; $i++){
    $heroi->LevarDano();
}
$heroi->Atacar();
$heroi->ExibirStatus();


?>