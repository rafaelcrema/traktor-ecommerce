<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "traktor-ecommerce";
$db = new mysqli($servername, $username, $password, $dbname);

if (!$db) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
 
echo "Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;
 
mysqli_close($db);
?>