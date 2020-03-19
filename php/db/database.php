<?php
$host = "127.0.0.1";
$user = "traktoradmin";
$pass = "traktoradmin";
$db = "traktor-ecommerce";
$conecta = mysqli_connect($host, $user, $pass, $db) or print (mysqli_select_db($db,$conecta));

if (!$db) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    exit;
}

mysqli_close($db);
?>