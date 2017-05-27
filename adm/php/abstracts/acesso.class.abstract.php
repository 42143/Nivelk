<?php
    abstract class Acesso{
        private $usuario;
        private $senha;
        
        public function __construct($usuario,$senha){
            $this->setUsuario($usuario);
            $this->setSenha($senha);
        }
        
        public function getUsuario(){
            return $this->usuario;
        }
        public function getSenha(){
            return $this->senha;
        }
        private function setUsuario($usuario){
            $this->usuario = $usuario;
        }
        private function setSenha($senha){
            $this->senha = sha1($senha);
        }
    }
?>