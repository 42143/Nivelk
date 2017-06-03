<?php
    
    abstract class banco{
        private $dados;
        protected $banco;
        
        protected function getDados(){
            return $this->dados;
        }
        protected function setDados($dados){
            $this->dados = $dados;
        }
        //METODOS ESPECIAIS 
        public function inseri(){
            
        }
        public function excluir(){
            
        }
        public function updade(){
            
        }
        public function deletar(){
            
        }
    }
?>