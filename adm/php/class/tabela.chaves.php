<?php
    class TabelaChaves{
        private $dado;
        
        public function __construct($dado){
            $this->setDado($dado);
        }
        
        public function getDado(){
            return $this->dado;
        }
        private function setDado($dado){
            $this->dado = $dado;
        }
        
        public function excluir(){
            require_once "php/class/configAdm.php";
            $check = $con->query("DELETE FROM chaves WHERE id_chaves = '{$this->getDado()}'");
            if($check == true){
                header("location:adm.php");
            }
        }
        public function adicionar(){
            require_once "php/class/configAdm.php";
           $check =  $con->query("INSERT INTO chaves(chaves) VALUES ('{$this->getDado()}')");
            if($check == true){
                header("location:adm.php");
            }
        }
        public function alterar(){
            require_once "php/class/configAdm.php";
           $check = $con->query("UPDATE descricao SET descricao = '{$this->getDado()}' ");
            if($check == true){
                header("location:adm.php");
            }
        }
    }
?>