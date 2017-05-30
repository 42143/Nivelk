<?php
    require_once "php/abstracts/acesso.class.abstract.php";
    class Sair extends Acesso{
        
    }
    $sair = new Sair(null,null,null);
    $sair->sair();
?>