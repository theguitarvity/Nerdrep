<?php

require_once("AbstractFactory.php");
require_once("Artigo.php");
class ArtigoDAO extends AbstractFactory {

    //put your code here
    private $tabela = 'artigo';
    private $campos = 'codArtigo, tituloArtigo, descArtigo, dataAdicionado, linkArtigo, usuarioArtigo';

    public function salvar($obj) {
        $artigo = $obj;
       

        try {
            $sql = "INSERT INTO " . $this->tabela . "(" . $this->campos . ") VALUES ( " . $artigo->getCodArtigo() . ",'" . $artigo->getTituloArtigo() . "','" . $artigo->getDescArtigo() . "','" . $artigo->getDataAdicionado() . "','" .$artigo->getLinkArtigo(). "',". $artigo->getUsuario()->getCodUsuario(). ")";

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
    public function deleta($cod){
        try {
            $sql = "DELETE FROM artigo Where codArtigo =" . $cod;

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

}
