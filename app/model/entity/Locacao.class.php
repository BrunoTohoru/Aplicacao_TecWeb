<?php

namespace app\model\entity;

class Locacao {

    private $id;
    private $emissao;
    private $devolucao;
    private $valor;
    private $filme_id;
    private $cliente_id;

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
