<?php
class Artigo {
    //put your code here
    private $codArtigo;
    private $tituloArtigo;
    private $descArtigo;
    private $dataAdicionado;
    private $linkArtigo;
    private $usuario;
    function __construct($codArtigo, $tituloArtigo, $tipoArtigo, $dataAdicionado, $linkArtigo, $usuario) {
        $this->codArtigo = $codArtigo;
        $this->tituloArtigo = $tituloArtigo;
        $this->tipoArtigo = $tipoArtigo;
        $this->dataAdicionado = $dataAdicionado;
        $this->linkArtigo = $linkArtigo;
        $this->usuario = $usuario;
    }
    function getTituloArtigo() {
        return $this->tituloArtigo;
    }

    function getDescArtigo() {
        return $this->descArtigo;
    }

    function getLinkArtigo() {
        return $this->linkArtigo;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function setTituloArtigo($tituloArtigo) {
        $this->tituloArtigo = $tituloArtigo;
    }

    function setDescArtigo($tipoArtigo) {
        $this->descArtigo = $tipoArtigo;
    }

    function setLinkArtigo($linkArtigo) {
        $this->linkArtigo = $linkArtigo;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function getCodArtigo() {
        return $this->codArtigo;
    }

    function getDataAdicionado() {
        return $this->dataAdicionado;
    }



    
    
}
