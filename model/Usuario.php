<?php
    class Usuario{
        private $codUsuario;
        private $nomeUsuario;
        private $emailUsuario;
        private $senhaUsuario;

        public function __construct($cod, $nome, $email, $senha){
            $this->codUsuario = $cod;
            $this->nomeUsuario = $nome;
            $this->emailUsuario = $email;
            $this->senhaUsuario = $senha;
        }
        function getNomeUsuario() {
            return $this->nomeUsuario;
        }
        function getCodUsuario() {
            return $this->codUsuario;
        }

        function getSenhaUsuario() {
            return $this->senhaUsuario;
        }

                function getEmailUsuario() {
            return $this->emailUsuario;
        }

        function setNomeUsuario($nomeUsuario) {
            $this->nomeUsuario = $nomeUsuario;
        }

        function setEmailUsuario($emailUsuario) {
            $this->emailUsuario = $emailUsuario;
        }
        function setCodUsuario($codUsuario) {
            $this->codUsuario = $codUsuario;
        }

        function setSenhaUsuario($senhaUsuario) {
            $this->senhaUsuario = $senhaUsuario;
        }






    }
?>