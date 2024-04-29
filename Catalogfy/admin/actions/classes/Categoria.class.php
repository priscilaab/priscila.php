<?php
require_once('Banco.class.php');
class Categorias{
    public $id;
    public $nome;

    public function Listar(){
        $sql = "SELECT * FROM categorias";
        $conexao = Banco::conectar();
        $comando = $conexao->prepare($sql);
        $comando->execute();
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $resultado;
    }
    public function Cadastrar(){
        $sql = "INSERT INTO categorias (nome) VALUES (?)";
        $conexao = Banco::conectar();
        $comando = $conexao->prepare($sql);
        $comando->execute([$this->nome]);
        $linhas = $comando->rowCount();
        Banco::desconectar();
        return $linhas;
    }
    public function Editar(){
        $sql = "UPDATE categorias SET nome=? WHERE id=?";
        $conexao = Banco::conectar();
        $comando = $conexao->prepare($sql);
        $comando->execute([$this->nome, $this->id]);
        $linhas = $comando->rowCount();
        Banco::desconectar();
        return $linhas;
    }
    public function Deletar(){
        $sql = "DELETE FROM categorias WHERE id = ?";
        $conexao = Banco::conectar();
        $comando = $conexao->prepare($sql);
        $comando->execute([$this->id]);
        $linhas = $comando->rowCount();
        Banco::desconectar();
        return $linhas;
    }
}


?>