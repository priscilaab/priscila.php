<?php 
class Pessoa{
    // Atributos:
    private $nome;
    private $idade;
    private $profissao;


    public function __construct($nome, $idade, $profissao){
      //Inicializar os atributos:  
        $this->nome = $nome;
        $this->idade = $idade;
        $this->profissao = $profissao;
    }

     // Métodos para exibir valores dos atributos: 
    public function getNome(){
        echo"$this->nome";
    }

    public function getIdade(){
        echo"$this->idade";
    }

    public function getProfissao(){
        echo"$this->profissao";
    }

    public function Apresentar(){
        echo "------------------------<br>
        Nome: $this->nome<br>
        Idade: $this->idade<br>
        Profissão: $this->profissao<br>
        -------------------------------<br>";
    }

}

?>