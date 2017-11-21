<?php

require_once("AbstractFactory.php");
require_once("../entity/Usuario.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioDAO
 *
 * @author mrlopito
 */
class UsuarioDAO extends AbstractFactory {

    //put your code here
    private $tabela = 'usuario';
    private $campos = 'codUsuario, nomeUsuario, emailUsuario, senhaUsuario';

    public function __construct() {
        $this->AbstractFactory();
    }

    public function salvar(Usuario $obj): boolean {
        $usuario = $obj;

        try {
            $sql = "INSERT INTO " . $this->nometabela .
                    "(" . $this->campos . ") VALUES ( "
                    . "'" . $usuario->getCodUsuario() . "','"
                    . $usuario->getNomeUsuario() . "','" .$usuario->getEmailUsuario()."','".$usuario->getSenhaUsuario() . "' " . ")";

            if ($this->db->exec($sql)) {
                $result = true;
            } else {
                $result = false;
            }
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            $result = false;
        }

        return $result;
    }

}
