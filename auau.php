<?php

require_once("Cachorro.class.php");

$c1 = new Cachorro("Bob", "Poodle");
$c2 = new Cachorro("Peludo", "Pinscher");

$arr = [$c1, $c2];

$arr[0]->Mostrar();




?>