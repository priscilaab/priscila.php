<?php
require_once('Banco.class.php');

class Contato{
    //Atributos:
    public $id;
    public $nome;
    public $email;
    public $telefone;

    //Métodos:
    public function Listar()
    {
        $sql = "SELECT * FROM contatos";
        $conexao = Banco::conectar();
        $comando = $conexao->prepare($sql);
        $comando->execute();
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $resultado;
    }
    public function ListarPorID()
    {
        $sql = "SELECT * FROM contatos WHERE id = ?";
        $conexao = Banco::conectar();
        $comando = $conexao->prepare($sql);
        $comando->execute([$this->id]);
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $resultado;
    }
    public function Cadastrar()
    {
        $sql = "INSERT INTO contatos (nome, email, telefone) VALUES (?,?,?)";
        $conexao = Banco::conectar();
        $comando = $conexao->prepare($sql);
        $comando->execute([$this->nome, $this->email, $this->telefone]);
        $linhas = $comando->rowCount();
        Banco::desconectar();
        return $linhas;
    }
    public function Apagar()
    {
        $sql = "DELETE FROM contatos WHERE id = ?";
        $conexao = Banco::conectar();
        $comando = $conexao->prepare($sql);
        $comando->execute([$this->id]);
        $linhas = $comando->rowCount();
        Banco::desconectar();
        return $linhas;
    }
    public function Modificar()
    {
        $sql = "UPDATE contatos SET nome=?, email=?, telefone=? WHERE id=?";
        $conexao = Banco::conectar();
        $comando = $conexao->prepare($sql);
        $comando->execute([$this->nome,$this->email, $this->telefone, $this->id]);
        $linhas = $comando->rowCount();
        Banco::desconectar();
        return $linhas;
    }
}

?>