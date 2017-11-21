<?php
require_once("model/entity/Usuario.php");
require_once("model/dao/ContatoFactory.php");
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
    }
    public function init(){
        $this->content = "";
        require'view/layout.php';
        if(isset($_GET['page']))
            $page = $_GET['page'];
        else
            $page = "";
        switch ($page){
            case "login":
                $this->telaLogin();
                break;
            case "register":
                $this->telaCadastro();
                
                break;
            
        }
    }
    public function telaLogin(){
    
        require 'view/login.php';
    }
    public function telaCadastro(){
    
        require 'view/register.php';
        if(isset($_GET['acao']))
            $acao = $_GET['acao'];
        else
            $acao ="";
        if($acao=="cadastrar")
            realizarCadastro();
    }
    public function realizarCadastro(){
        if (isset($_POST['action'])){
        
            $nome = $_POST['name'];
            $email = $_POST['email'];
            $senha = $_POST['password'];
            $confirm = $_POST['password_confirmation'];
            $sucess = false;
        }
    }
}
