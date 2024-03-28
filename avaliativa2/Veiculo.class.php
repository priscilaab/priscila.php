<?php 

class Veiculo{
    // Atributos:
    private $marca;
    private $modelo;
    private $ano;
    private $cor;
    private $preco_zero;

    public function __construct($marca, $modelo, $ano, $cor, $preco_zero){
    // Inicializar os atributos:
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->ano = $ano;
    $this->cor = $cor;
    $this->preco_zero = $preco_zero;
    }

    //Métodos para exibir valores:
    public function exibirInformacoes(){
        echo "-----------------------<br>
        Marca: $this->marca<br>
        Modelo: $this->modelo<br>
        Ano: $this->ano<br>
        Cor: $this->cor<br>
        Preço Zero: $this->preco_zero<br>";
    }
    public function calcularIdade(){
        $idade = date('Y') - $this->ano;
        echo "Idade: $idade<br>";
    }
    public function calcularDepreciacao(){
        $depreciacao = ((date('Y')-$this->ano ) * 430) + 2100;
        echo"Depreciação: $depreciacao<br>";
    }
    public function ehNovo(){
       if (date('Y')- $this->ano<2){
            echo "É Novo!";
       }
    }
    public function pintarVeiculo($novaCor)

    
}

?>
