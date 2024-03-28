<?php

class SuperHeroi
{

    // Atributos:
    private $nome_fantasia;
    private $identidade_secreta;

    private $vida;
    private $forca;

    private $xp;


    public function __construct($nf, $is){
        // Definir os valores iniciais:
        $this->nome_fantasia = $nf;
        $this->identidade_secreta = $is;

        $this->vida = 100;
        $this->forca = 50;
        $this->xp = 50;
    }

    // Métodos:
    public function AumentarVida()
    {
        if($this->vida <= 0 || $this->vida >=100){
            echo "Não é possível adicionar vida.";
        }else if($this->vida > 95){
            $this->vida = 100;
        }else{
            $this->vida += 5;
        }
    }

    public function LevarDano()
    {
        if($this->vida <= 0){
            echo "$this->nome_fantasia já está morto!";
        }else{
            $this->vida -= 10;
            $this->forca -= 10;
            $this->xp += 1;
        }
    }

    public function Atacar()
    {
        if($this->vida <= 0){
            echo "$this->nome_fantasia está morto e não pode atacar!";
        }else if($this->forca <= 0){
            echo "$this->nome_fantasia está fraco e não pode atacar!";
        }else{
            $this->xp += 10;
        }
        
    }

    public function TomarWhey()
    {
        if($this->vida <= 0){
            echo "$this->nome_fantasia está morto e não pode tomar whey!";
        }else{
            $this->forca += 15;
        }
        
    }

    public function ExibirStatus()
    {
        echo "<br>=============================<br>
        Nome: $this->nome_fantasia <br>
        Identidade secreta: $this->identidade_secreta <br>
        Vida: $this->vida <br>
        Força: $this->forca <br>
        XP: $this->xp
        <br>=============================<br>";
    }
}
