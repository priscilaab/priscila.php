<?php
class Carro{
    // Atributos:
    public $cor;
    public $modelo;
    public $marca;
    public $ano;
    public $velocidade = 0;
    public $estado; // ligado ou desligado

    // Métodos (ações):
    public function Ligar(){
        $this->estado = "Ligado";
    }
    public function Desligar(){
        $this->estado = "Desligado";
    }
    public function Acelerar(){
        $this->velocidade += 10;
    }
    public function Frear() {
        $this->velocidade -= 10;
    }
    public function MostrarPainel(){
        echo "==================================<br>
        Marca: $this->marca <br>
        Modelo: $this->modelo <br>
        Ano: $this->ano <br>
        Estado: $this->estado <br>
        Velocidade Atual: $this->velocidade <br>
        ==================================<br>";
    }
}
?>