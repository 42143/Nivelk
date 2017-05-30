<?php
    require_once "php/abstracts/acesso.class.abstract.php";
    
    class AcessoAdm extends Acesso{
        private $banco;
        
        public function __construct($usuario,$senha,$dados){
            parent::__construct($usuario,$senha,$dados);
        }
        
        //METODOS ESPECIAIS 
        public function banco($banco){
            $this->banco = $banco;
        }
        public function acessar(){
            
            $check = $this->banco->query("SELECT * FROM administrado WHERE usuario = '{$this->getUsuario()}' AND senha= '{$this->getSenha()}'");
            $adm = $check->fetch_row();
            
            if($check->num_rows == true){
                session_start();
                $_SESSION["id_adm"] = $adm[0];
                $_SESSION["usuario"] = $adm[1];
                header("location:adm.php");
            }else{
                echo"<script>alert('Erro! email e senha não confere.');history.back();</script>";
            }
        }
                
    }
?>