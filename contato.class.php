<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
            
    $to = 'aslan-k@hotmail.com';
            
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
            
    $headers .= 'To: Nivelk <contato.nivelk@gmail.com>' . "\r\n";
    $headers .= 'From:'. $email .'<'. $email .'>' . "\r\n";
    $headers .= 'Reply-To: '. $email . "\r\n" . 'X-Mailer: PHP/' . phpversion(). "\r\n";
    $headers .= 'X-Sender: <10@mx1.hostinger.com.br>' . "\r\n";
    $headers .= 'X-IP:'. $_SERVER['REMOTE_ADDR']. "\r\n" . 'Return-Path: <'. $email .'>' . "\r\n";
                            
    if(mail($to , $assunto , $mensagem , $headers)){
                   
        echo "<script>alert('Enviado com sucesso!');window.location.href='http://nivelk.com.br/agencia.php';</script>"; 
    }     
?>