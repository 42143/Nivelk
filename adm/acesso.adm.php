<?php
    require_once "php/class/acesso.adm.class.php";
    require_once "../config.php";

    $acesso = new AcessoAdm($_POST["usuario"],$_POST["senha"],null);
    $acesso->banco($con);
    $acesso->acessar();
?>