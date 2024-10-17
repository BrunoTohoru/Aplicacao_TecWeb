<?php

namespace app\model\entity;

class Filme {

    private $id;
    private $nome;
    private $ano;
    private $duracao;
    private $foto;
    private $sinopse;
    private $estilo_id;

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