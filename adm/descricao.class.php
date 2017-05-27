<?php
    require_once "php/class/tabela.chaves.php";
    $chave = new TabelaChaves($_POST["descricao"]);
    $chave->alterar();
?>