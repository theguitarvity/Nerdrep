<?php

require_once("AbstractFactory.php");
require_once("Usuario.php");
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

    public function salvar($obj) {
        $usuario = $obj;
        //$result = false;

        try {
            $sql = "INSERT INTO " . $this->tabela . "(" . $this->campos . ") VALUES ( " . $usuario->getCodUsuario() . ",'" . $usuario->getNomeUsuario() . "','" . $usuario->getEmailUsuario() . "','" . $usuario->getSenhaUsuario() . "' " . ")";

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

    public function login($email, $senha) {
        $resultado = false;
        try {
            $sql = "select * from usuario where emailUsuario = :email and senhaUsuario = :senha ";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->execute();
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (count($users) > 0)
                $resultado = true;
            else
                $resultado = false;

            return $resultado;
        } catch (PDOException $ex) {
            echo $exc->getMessage();
            $resultado = false;
        }
    }

    public function retornaUsuario($email) {
        $sql = "SELECT * FROM " . $this->nometabela . "where emailUsuario = '" . $email . "'";
        try {
            $resultRows = $this->db->query($sql);
            if (!($resultRows instanceof PDOStatement)) {
                throw new Exception("Tem erro no seu SQL!<br> '" . $sql . "'");
            }

            $resultObject = $this->queryRowsToListOfObjects($resultRows, "Contato");
        } catch (Exception $ex) {
            
        }
    }

}
