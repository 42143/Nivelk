<?php
    require_once "php/abstracts/acesso.class.abstract.php";
    class TabelaChaves extends Acesso{
        private $banco;
        
        public function __construct($usuario,$senha,$dados){
            parent::__construct($usuario,$senha,$dados);
        }
        
        //METODOS ESPECIAIS
         public function banco($banco){
            $this->banco = $banco;
        }
        public function excluir(){
            
            $check = $this->banco->query("DELETE FROM chaves WHERE id_chaves = '{$this->getDados()}'");
            if($check == true){
                header("location:adm.php");
            }else{
                echo "<script>alert('Erro');history.back();</script>";
            }
        }
        public function adicionar(){
            
           $check =  $this->banco->query("INSERT INTO chaves(chaves) VALUES ('{$this->getDados()}')");
            if($check == true){
                header("location:adm.php");
            }else{
                echo "<script>alert('Já tem essa palavra');history.back();</script>";
            }
        }
        public function alterar(){
            
           $check = $this->banco->query("UPDATE descricao SET descricao = '{$this->getDados()}' ");
            if($check == true){
                header("location:adm.php");
            }else{
                echo "<script>alert('Erro');history.back();</script>";
            }
        }
    }
?>