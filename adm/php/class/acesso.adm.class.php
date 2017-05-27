<?php
    require_once "php/abstracts/acesso.class.abstract.php";
    
    class AcessoAdm extends Acesso{
        
        public function __construct($usuario,$senha){
            parent::__construct($usuario,$senha);
        }
        
        //Metodos especiais
        public function acessar(){
            
            require_once "configAdm.php";
            
            $check = $con->query("SELECT * FROM administrado WHERE usuario = '{$this->getUsuario()}' AND senha= '{$this->getSenha()}'");
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