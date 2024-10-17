<?php 

namespace app\model\dao;

use app\model\entity\Estilo;
use \PDOException; // Importa PDO da raiz
use \PDO;

class EstiloDAO extends DAO {

    public function __construct() {
        // Chama o construtor do pai
        parent::__construct();
    }

    /**
    * Método Create (recebe um objeto de estilo)
    */
    public function create($estilo) {
        try {
            $pdo = $this->conexao->get_pdo();

            $pdo_sql = $pdo->prepare("INSERT INTO estilo (nome) VALUES (:nome);");
            $pdo_sql->bindParam(":nome", $estilo->nome, PDO::PARAM_STR);

            return $pdo_sql->execute();
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function read_all() {
        try {
            $pdo = $this->conexao->get_pdo();

            $pdo_sql = $pdo->prepare("SELECT id, nome FROM estilo;");
            $pdo_sql->execute();
            $array_retorno = $pdo_sql->fetchAll();

            $estilos = array();
            foreach ($array_retorno as $array_estilo) {
                $estilo = new Estilo();
                $estilo->id = $array_estilo['id'];
                $estilo->nome = $array_estilo['nome'];

                $estilos[] = $estilo;
            }
            return $estilos;            
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function read($id) {
        try {
            $pdo = $this->conexao->get_pdo();

            $pdo_sql = $pdo->prepare("SELECT id, nome FROM estilo WHERE id=:id;");
            $pdo_sql->bindParam(":id", $id, PDO::PARAM_INT);
            $pdo_sql->execute();
            $array_estilo = $pdo_sql->fetch();

            $estilo = new Estilo();
            $estilo->id = $array_estilo['id'];
            $estilo->nome = $array_estilo['nome'];

            return $estilo;
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function update($estilo) {
        try {
            $pdo = $this->conexao->get_pdo();

            $pdo_sql = $pdo->prepare("UPDATE estilo SET nome=:nome WHERE id=:id;");
            $pdo_sql->bindValue(":id", $estilo->id); 
            $pdo_sql->bindParam(":nome", $estilo->nome, PDO::PARAM_STR);

            return $pdo_sql->execute();
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function delete($id) {
        try {
            $pdo = $this->conexao->get_pdo();

            $pdo_sql = $pdo->prepare("DELETE FROM estilo WHERE id=:id;");
            $pdo_sql->bindParam(":id", $id, PDO::PARAM_INT);
            return $pdo_sql->execute();
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }
}

?>
