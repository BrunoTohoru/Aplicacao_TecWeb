<?php 

namespace app\model\dao;

use app\model\entity\Cliente;
use \PDOException; // Importa PDO da raiz
use \PDO;

class ClienteDAO extends DAO {

    public function __construct() {
        // Chama o construtor do pai
        parent::__construct();
    }

    /**
    * Método Create (recebe um objeto de cliente)
    */
    public function create($cliente) {
        try {
            $pdo = $this->conexao->get_pdo();

            $pdo_sql = $pdo->prepare("INSERT INTO cliente (nome, endereco, telefone) VALUES (:nome, :endereco, :telefone);");
            $pdo_sql->bindParam(":nome", $cliente->nome, PDO::PARAM_STR);
            $pdo_sql->bindParam(":endereco", $cliente->endereco, PDO::PARAM_STR);
            $pdo_sql->bindParam(":telefone", $cliente->telefone, PDO::PARAM_STR);

            return $pdo_sql->execute();
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function read_all() {
        try {
            $pdo = $this->conexao->get_pdo();

            $pdo_sql = $pdo->prepare("SELECT id, nome, endereco, telefone FROM cliente;");
            $pdo_sql->execute();
            $array_retorno = $pdo_sql->fetchAll();

            $clientes = array();
            foreach ($array_retorno as $array_cliente) {
                $cliente = new Cliente();
                $cliente->id = $array_cliente['id'];
                $cliente->nome = $array_cliente['nome'];
                $cliente->endereco = $array_cliente['endereco'];
                $cliente->telefone = $array_cliente['telefone'];

                $clientes[] = $cliente;
            }
            return $clientes;            
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function read($id) {
        try {
            $pdo = $this->conexao->get_pdo();

            $pdo_sql = $pdo->prepare("SELECT id, nome, endereco, telefone FROM cliente WHERE id=:id;");
            $pdo_sql->bindParam(":id", $id, PDO::PARAM_INT);
            $pdo_sql->execute();
            $array_cliente = $pdo_sql->fetch();

            $cliente = new Cliente();
            $cliente->id = $array_cliente['id'];
            $cliente->nome = $array_cliente['nome'];
            $cliente->endereco = $array_cliente['endereco'];
            $cliente->telefone = $array_cliente['telefone'];

            return $cliente;
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function update($cliente) {
        try {
            $pdo = $this->conexao->get_pdo();

            $pdo_sql = $pdo->prepare("UPDATE cliente SET nome=:nome, endereco=:endereco, telefone=:telefone WHERE id=:id;");
            $pdo_sql->bindValue(":id", $cliente->id); 
            $pdo_sql->bindParam(":nome", $cliente->nome, PDO::PARAM_STR);
            $pdo_sql->bindParam(":endereco", $cliente->endereco, PDO::PARAM_STR);
            $pdo_sql->bindParam(":telefone", $cliente->telefone, PDO::PARAM_STR);

            return $pdo_sql->execute();
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function delete($id) {
        try {
            $pdo = $this->conexao->get_pdo();

            $pdo_sql = $pdo->prepare("DELETE FROM cliente WHERE id=:id;");
            $pdo_sql->bindParam(":id", $id, PDO::PARAM_INT);
            return $pdo_sql->execute();
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }
}

?>
