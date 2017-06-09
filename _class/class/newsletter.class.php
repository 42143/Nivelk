<?php
    require_once "_class/abstracts/banco.class.abstract.php";
    class Newsletter{
        
        public function inseri(){
            $this->banco->query("INSERT INTO newsletter VALUES (NULL,'{$this->getDados()}')");
        }
    }
?>