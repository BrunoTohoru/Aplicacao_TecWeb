<?php

namespace app\model\entity;

class Cliente {

    private $id;
    private $nome;
    private $endereco;
    private $telefone;

    /**
     * Método mágico
     */
    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    /**
     * Método mágico
     */
    public function __get($atributo) {
        return $this->$atributo;
    }
}

?>
