<?php

namespace app\model\entity;

class Estilo {

    private $id;
    private $nome;

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