<?php
    
    abstract class banco{
        private $dados;
        protected $banco;
        
        protected function getDados(){
            return $this->dados;
        }
        public function setDados($dados){
            $this->dados = $dados;
        }
        private function getBanco(){
            return $this->banco;
        }
        public function setBanco($banco){
            $this->banco = $banco;
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