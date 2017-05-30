<?php
    require_once "php/abstracts/acesso.class.abstract.php";

    class TabalaUsuario extends Acesso{
        private $banco;
        
        public function __construct($usuario,$senha,$dados){
            parent::__construct($usuario,$senha,$dados);
        }
        
        //METODOS ESPECIAIS
         public function banco($banco){
            $this->banco = $banco;
        }
        public function excluir(){
            
            $check = $this->banco->query("DELETE FROM administrado WHERE id_adm = '{$this->getDados()}'");
            if($check == true){
                header("location:adm.php");
            }else{
                echo "<script>alert('Erro');history.back();</script>";
            }
        }
        public function adicionar(){
            
           $check = $this->banco->query("INSERT INTO administrado VALUES(NULL,'{$this->getUsuario()}','{$this->getSenha()}')");
            
            if($check == true){
                header("location:adm.php");
            }else{
                echo"<script>alert('Usuario:maxino 10 caracteres');history.back();</script>";
            }
        }
    }
?>