<?php

/**
 * Responsável por processr a requisição
 * do usuário
 */
class FuncionarioController {

    /**
     * Devolve a view de listagem de funcionário
     */
    public static function listar() {

        $dao = new FuncionarioDAO();
        $funcionarios = $dao->read_all();

        include 'view/modules/funcionario/FuncionarioListar.php';

    }

    public static function form() {

        $funcionario = null;

        if(isset($_GET['edit'])) {
            $dao = new FuncionarioDAO();
            $funcionario = $dao->read((int) $_GET['edit']);
        }

        include 'view/modules/funcionario/FuncionarioForm.php';
    }

    public static function create() {

        $dao = new FuncionarioDAO();
        
        if(isset($_POST['cadastrar'])) {
            $funcionario = new Funcionario();
            $funcionario->nome = $_POST['nome'];
            $funcionario->email = $_POST['email'];
            $funcionario->senha = $_POST['senha'];
        
            if ($dao->create($funcionario)){
                header("Location: /funcionario");
            } else {
                // Isso não funciona pensar em uma maneira de apresentar a mensagem
                echo '<script type="text/javascript">alert("Erro em cadastrar");</script>'; // Se der erro imprime na tela um script
            }
        } elseif (isset($_POST['editar'])) {
            $funcionario = new Funcionario();
            $funcionario->id = $_POST['id'];
            $funcionario->nome = $_POST['nome'];
            $funcionario->email = $_POST['email'];
            $funcionario->senha = $_POST['senha'];

            if ($dao->update($funcionario)){
                header("Location: /funcionario");
            } else {
                // Isso não funciona pensar em uma maneira de apresentar a mensagem
                echo '<script type="text/javascript">alert("Erro em cadastrar");</script>'; // Se der erro imprime na tela um script
            }
        }
    
    }

    public static function delete() {

        $id = $_GET['id'];

        $dao = new FuncionarioDAO();

        if ($dao->delete($id)) {
            header("Location: /funcionario");
        } else {
            echo '<script type="text/javascript">alert("Erro em excluir");</script>';
        }

    }


}

?>