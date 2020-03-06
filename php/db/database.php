<?php

$host = "localhost";
$user = "root";
$senha = "";
$bd = "ecommerce_traktor";

$mysqli = new mysqli($host, $user, $senha, $bd);

if($mysqli->connect_errno)
    echo "erro na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_errno;
?>