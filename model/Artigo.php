<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Artigo
 *
 * @author mrlopito
 */
class Artigo {
    //put your code here
    private $codArtigo;
    private $tituloArtigo;
    private $tipoArtigo;
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

    function getTipoArtigo() {
        return $this->tipoArtigo;
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

    function setTipoArtigo($tipoArtigo) {
        $this->tipoArtigo = $tipoArtigo;
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
