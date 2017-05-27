<?php
    require_once "php/class/acesso.adm.class.php";
    $acesso = new AcessoAdm($_POST["usuario"],$_POST["senha"]);
    $acesso->acessar();
?>