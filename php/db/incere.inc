<?php

include 'mensagem_mysql.inc';

$email_mensagem = $_POST['email_mensagem'];
$nome_mensagem = $_POST['nome_mensagem'];
$msg_mensagem = $_POST['msg_mensagem'];

$sql = "INSERT INTO  mensagem VALUE";
$sql .= "('$email_mensagem', '$nome_mensagem', '$msg_mensagem')";

if ($conecta->query($sql) === true ){
    echo "Mensagem enviada com sucesso!";
    }
    else{
        echo "erro no envio da mensagem!";
    }

$conecta->close();

?>