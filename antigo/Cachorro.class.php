<?php

class Cachorro{
    private $nome;
    private $raca;
    private $idade;

    public function __construct($nome, $raca)
    {
        // Inicializar os atributos:
        $this->nome = $nome;
        $this->raca = $raca;
        $this->idade = 0;
    }
    public function Mostrar(){
        echo "Nome $this->nome Raca $this->raca";
    }
}

?>