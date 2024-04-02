
<?php 

require_once('Banco.class.php');

class Usuario{
    // Artibutos: 
    //  Que os atributos preferencialmente sejam iguais aos dos banco de dados
    public $i;
    public $nome_completo;
    public $email;
    public $senha;

    // Métodos:
    // Os nomes dos metodos podem ser os mesmos do banco de dados: Insert, Delete, Select...
    // A vareavel $sql pode ser chamar query, cld, não existe uma forma padrão
    // Dentro da variavel que chama o banco de dados é necessario que os nomes dos campos que serão incrementados 
    //sejam iguais aos campos do banco de dados.
    public function Listar(){
    $sql = "SELECT * FROM usuarios";
    $conexao =  Banco::conectar();

    // Converter o comando sql(string) em um objeto:
    $comando =  $conexao->prepare($sql);

    // Executa o comando:
    $comando->execute(); 

    // Entregar o resultado para $resulado como um array associativo:
    $resultado = $comando->fetchALL(PDO::FETCH_ASSOC);

    // Desconectar:, sempre desconectar para não sobrecarregar a interface
    Banco::desconectar();

    return $resultado;

    }
    public function Cadastrar(){
    $sql = "INSERT INTO usuarios('nome_completo', 'email', 'senha') VALUES
      (?,?,?)";
    }
    public function Apagar(){
     $sql = "DELETE FROM usuarios WHERE id = ?";
    }
    public function Modificar(){
    $sql = "UPDATE usuarios SET nome_completo=?, email=?, senha=? WHERE id=?";
    }
}

?>