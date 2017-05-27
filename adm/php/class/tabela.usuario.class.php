<?php
    require_once "php/abstracts/acesso.class.abstract.php";

    class TabalaUsuario extends Acesso{
        private $idAdm;
        
        public function __construct($idAdm,$usuario,$senha){
            parent::__construct($usuario,$senha);
            $this->setIdAdm($idAdm);
        }
        
        public function getIdAdm(){
            return $this->idAdm;
        } 
        private function setIdAdm($idAdm){
            $this->idAdm = $idAdm;
        }
        //Metodos Especiais
        public function excluir(){
            require_once "php/class/configAdm.php";
            $check = $con->query("DELETE FROM administrado WHERE id_adm = '{$this->getIdAdm()}'");
            if($check == true){
                header("location:adm.php");
            }
        }
        public function adicionar(){
            require_once "php/class/configAdm.php";
           $check = $con->query("INSERT INTO administrado VALUES(NULL,'{$this->getUsuario()}','{$this->getSenha()}')");
            
            if($check == true){
                header("location:adm.php");
            }
        }
    }
?>