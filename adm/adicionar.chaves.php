<?php
    require_once "php/class/tabela.chaves.class.php";
    require_once "../config.php";

    $chave = new TabelaChaves(null,null,$_POST["chaves"]);
    $chave->banco($con);
    $chave->adicionar();
?>