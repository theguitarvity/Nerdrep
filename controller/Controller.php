<?php

require_once("model/UsuarioDAO.php");
require_once("model/Usuario.php");
require_once("model/Artigo.php");
require_once("model/ArtigoDAO.php");
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
    private $artigoDAO;
    

    public function __construct() {
        $this->usuarioDAO = new UsuarioDAO();
        $this->artigoDAO = new ArtigoDAO();
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
                $this->realizarLogin();
                break;
            case "dashboard":
                $this->dashboard();
                break;
            case "logout":
                $this->logout();
                break;
            case "novoArtigo":
                $this->adicionarArtigo();
                break;
        }
    }

    public function dashboard() {
        $artigos = $this->listar();
        require 'view/dashboard.php';
    }

    public function realizarLogin() {
        if (isset($_POST['action'])) {
            $email = $_POST['email'];
            $senha = $_POST['password'];
            if ($this->usuarioDAO->login($email, $senha)) {
                $usuario = $this->usuarioDAO->retornaUsuario($email)[0];
                session_start();
                $_SESSION['logado'] = true;
                $_SESSION['usuario'] = $usuario;
                header('Location: index.php?page=dashboard');
            }
        }
    }

    public function logout() {
        session_destroy();
        header('Location: index.php?page=login');
    }

    public function telaLogin() {
        require 'view/layout.php';
        require 'view/login.php';
    }

    public function telaCadastro() {

        require 'view/layout.php';
        require 'view/register.php';

        if (isset($_GET['acao']))
            $acao = $_GET['acao'];
        else
            $acao = "";
        if ($acao == "cadastrar")
            realizarCadastro();
    }
    public function listar(){
        session_start();
        
        return $artigos = $this->artigoDAO->listar($_SESSION['usuario']);
    }
    public function adicionarArtigo(){
        session_start();
        if(isset($_POST['action'])){
            $codigo = rand(1111111,9999999);
            $titulo = $_POST['title'];
            $tipo = $_POST['type'];
            $link = $_POST['link'];
            $data = date("Y-m-d");
            $usuario = $_SESSION['usuario'];
            $sucess = false;
            try {
                $artigo = new Artigo($codigo, $titulo, $tipo, $data, $link, $usuario);
                $sucess = $this->artigoDAO->salvar($artigo);
                if($sucess==true)
                   header('Location: index.php?page=dashboard'); 
            } catch (Exception $ex) {
                
            }
        }
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
