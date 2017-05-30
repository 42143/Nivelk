<?php
    require_once "php/class/tabela.chaves.class.php";
    require_once "../config.php";

    $chave = new TabelaChaves(null,null,$_POST["descricao"]);
    $chave->banco($con);
    $chave->alterar();
?>