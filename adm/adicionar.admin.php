<?php
    require_once "php/class/tabela.usuario.class.php";
    require_once "../config.php";

    $usuario = new TabalaUsuario($_POST["usuario"],$_POST["senha"],NULL);
    $usuario->banco($con);
    $usuario->adicionar();
?>