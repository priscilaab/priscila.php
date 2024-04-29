<?php 

require_once("Banco.class.php");

class Produtos{
    public $id;
    public $nome;
    public $descricao;
    public $id_categoria;
    public $estoque;
    public $preco;
    public $foto;
    public $id_resp;

    public function CadastrarComFoto(){
        $sql = "INSERT INTO produtos (nome, descricao, id_categoria, estoque, preco, foto, id_resp) VALUES (?,?,?,?,?,?,?)";
        $conexao = Banco::conectar();
        $comando = $conexao->prepare($sql);
        $comando->execute([$this->nome, $this->descricao, $this->id_categoria, $this->estoque, $this->preco, $this->foto, $this->id_resp]);
        $linhas = $comando->rowCount();
        Banco::desconectar();
        return $linhas;
    }
    public function CadastrarSemFoto(){
        $sql = "INSERT INTO produtos (nome, descricao, id_categoria, estoque, preco, id_resp) VALUES (?,?,?,?,?,?)";
        $conexao = Banco::conectar();
        $comando = $conexao->prepare($sql);
        $comando->execute([$this->nome, $this->descricao, $this->id_categoria, $this->estoque, $this->preco, $this->id_resp]);
        $linhas = $comando->rowCount();
        Banco::desconectar();
        return $linhas;
    }
    public function Listar(){
        $sql = "SELECT * FROM produtos";
        $conexao = Banco::conectar();
        $comando = $conexao->prepare($sql);
        $comando->execute();
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $resultado;
    }
    public function ListarPorId(){
        $sql = "SELECT * FROM produtos WHERE id = ?";
        $conexao = Banco::conectar();
        $comando = $conexao->prepare($sql);
        $comando->execute([$this->id]);
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $resultado;
    }
    public function Excluir(){
        $sql = "DELETE FROM produtos WHERE id = ?";
        $conexao = Banco::conectar();
        $comando = $conexao->prepare($sql);
        $comando->execute([$this->id]);
        $linhas = $comando->rowCount();
        Banco::desconectar();
        return $linhas;
    }
    public function EditarComFoto(){
        //CORRIGIR::
        $sql = "UPDATE produtos SET nome=?, descricao=?, id_categoria=?, estoque=?, preco=?, foto=?  WHERE id=? ";
        $conexao = Banco::conectar();
        $comando = $conexao->prepare($sql);
        $comando->execute([$this->nome, $this->descricao, $this->id_categoria, $this->estoque, $this->preco, $this->foto, $this->id]);
        $linhas = $comando->rowCount();
        Banco::desconectar();
        return $linhas;
    }
    public function EditarSemFoto(){
        //CORRIGIR::
        $sql = "UPDATE produtos SET nome=?, descricao=?, id_categoria=?, estoque=?, preco=? WHERE id=? ";
        $conexao = Banco::conectar();
        $comando = $conexao->prepare($sql);
        $comando->execute([$this->nome, $this->descricao, $this->id_categoria, $this->estoque, $this->preco, $this->id]);
        $linhas = $comando->rowCount();
        Banco::desconectar();
        return $linhas;
    }
    public function ListarViewProduto(){
        $sql = "SELECT * FROM produtos_interface";
        $conexao = Banco::conectar();
        $comando = $conexao->prepare($sql);
        $comando->execute();
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $resultado;
    }
}

?>