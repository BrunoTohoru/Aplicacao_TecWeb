<?php

namespace Controller;

use src\entity\Usuario;

/**
 * Responsável por processr a requisição
 * do usuário
 */
class LoginController extends Controller{
    

    public static function login() {
        include '../src/view/login.php';
    }

    public static function autenticar() {
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        $usuarioDAO = new UsuarioDAO();S

        $usuario_autenticado = $usuarioDAO->readUserByUserAndPass($usuario, $senha);

        if (!is_null($usuario_autenticado)) {
            $_SESSION['usuario_logado']['id'] = $usuario_autenticado->id;
            $_SESSION['usuario_logado']['nome'] = $usuario_autenticado->nome;
            header("Location: /");
        } else {
            header("Location: /login?fail=true");
        }

    }

    public static function sair() {
        
        unset($_SESSION['usuario_logado']);

        header("Location: /login");
    }
}

?>