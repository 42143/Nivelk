<?php
    require_once "php/class/tabela.usuario.class.php";
    $usuario = new TabalaUsuario($_POST["excluirAdmin"],NULL,NULL);
    $usuario->excluir();
?>