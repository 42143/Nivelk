<?php
    abstract class Acesso{
        private $usuario;
        private $senha;
        private $dados;
        
        public function __construct($usuario,$senha,$dados){
            $this->setUsuario($usuario);
            $this->setSenha($senha);
            $this->setDados($dados);
        }
        //__GET
        protected function getUsuario(){
            return $this->usuario;
        }
        protected function getSenha(){
            return $this->senha;
        }
        protected function getDados(){
            return $this->dados;
        }
        //__SET
        private function setUsuario($usuario){
            $this->usuario = $usuario;
        }
        private function setSenha($senha){
            $this->senha = sha1($senha);
        }
        private function setDados($dados){
            $this->dados = $dados;
        }
        
        //METODOS ESPECIAIS 
        public function sair(){
            session_start();
            session_destroy();
            header("location:index.php");
        }
    }
?>