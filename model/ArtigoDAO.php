<?php

require_once("AbstractFactory.php");
require_once("Artigo.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArtigoDAO
 *
 * @author mrlopito
 */
class ArtigoDAO extends AbstractFactory {

    //put your code here
    private $tabela = 'artigo';
    private $campos = 'codArtigo, tituloArtigo, tipoArtigo, dataAdicionado, linkArtigo, usuarioArtigo';

    public function salvar($obj) {
        $artigo = $obj;
        //$result = false;

        try {
            $sql = "INSERT INTO " . $this->tabela . "(" . $this->campos . ") VALUES ( " . $artigo->getCodArtigo() . ",'" . $artigo->getTituloArtigo() . "','" . $artigo->getTipoArtigo() . "','" . $artigo->getDataAdicionado() . "','" .$artigo->getLinkArtigo(). "',". $artigo->getUsuario()->getCodUsuario(). ")";

            if ($this->db->exec($sql)) {
                $result = true;
            } else {
                $result = false;
            }
            //return $result;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            $result = false;
        }

        return $result;
    }
    public function listar($usuario){
         $sql = "SELECT * FROM artigo Where usuarioArtigo =" . $usuario->getCodUsuario();

        try {
            $resultRows = $this->db->query($sql);

            if (!($resultRows instanceof PDOStatement)) {
                throw new Exception("Tem erro no seu SQL!<br> '" . $sql . "'");
            }

            $resultObject = $this->queryRowsToListOfObjects($resultRows, "Artigo");
        } catch (Exception $exc) {

            echo $exc->getMessage();
            $resultObject = null;
        }

        return $resultObject;
    }

}
