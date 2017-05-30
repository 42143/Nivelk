<?php
    require_once "php/class/tabela.usuario.class.php";
    require_once "../config.php";

    $usuario = new TabalaUsuario(null,null,$_POST["excluirAdmin"]);
    $usuario->banco($con);
    $usuario->excluir();
?>