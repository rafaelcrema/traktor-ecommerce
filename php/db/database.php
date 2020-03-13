<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "traktor-ecommerce";
$db = new mysqli($servername, $username, $password, $dbname);

if (!$db) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    exit;
}

mysqli_close($db);
?>