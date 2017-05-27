<?php
    require_once "php/class/tabela.usuario.class.php";
    $usuario = new TabalaUsuario(NULL,$_POST["usuario"],$_POST["senha"]);
    $usuario->adicionar();
?>