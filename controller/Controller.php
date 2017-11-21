<?php

require_once("model/UsuarioDAO.php");
require_once("model/Usuario.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author mrlopito
 */
class Controller {

    //put your code here
    private $content;
    private $usuarioDAO;

    public function __construct() {
        $this->usuarioDAO = new UsuarioDAO();
        ini_set('error_reporting', E_ALL);
        ini_set('display_errors', 1);
    }

    public function init() {
        $this->content = "";
        //require'view/layout.php';
        if (isset($_GET['page']))
            $page = $_GET['page'];
        else
            $page = "";
        switch ($page) {
            case "login":
                $this->telaLogin();
                break;
            case "register":
                $this->telaCadastro();
                break;
            case "cadastrar":
                $this->realizarCadastro();
                break;
            case "logar":
                $this->dashboard();
                break;
            
        }
    }
    public function dashboard(){
        require 'view/dashboard.php';
    }
    public function realizarLogin(){
        if(isset($_POST['action'])){
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            
        }
    }

    public function telaLogin() {
        require 'view/layout.php';
        require 'view/login.php';
    }

    public function telaCadastro() {

        require 'view/register.php';
        require 'view/layout.php';
        if (isset($_GET['acao']))
            $acao = $_GET['acao'];
        else
            $acao = "";
        if ($acao == "cadastrar")
            realizarCadastro();
    }

    public function realizarCadastro() {
        if (isset($_POST['action'])) {
            $codigo = rand(1111111, 9999999);
            $nome = $_POST['name'];
            $email = $_POST['email'];
            $senha = $_POST['password'];
            $confirm = $_POST['password_confirmation'];
            $sucess = false;
            try {
                if ($nome == "" || $email == "" || $senha == "" || $confirm == "")
                    throw new Exception('Erro! Campos em branco. ');
                if ($senha == $confirm) {
                    $usuario = new Usuario($codigo, $nome, $email, $senha);
                    $sucess = $this->usuarioDAO->salvar($usuario);
                }
                if ($sucess == true)
                    $this->telaLogin();
            } catch (Exception $ex) {
                require 'login.php';
            }
        }
    }

}
