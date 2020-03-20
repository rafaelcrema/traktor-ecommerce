<?php
session_start();
    include ('./conexao.php');

    if (empty($_POST['usuario_user']) || empty ($_POST['senha'])){
        header('locatin: /traktor/pagina inicial/login_acess.php');
        exit();
    }

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario_user']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$query = "SELECT usuario_id from usuarios where usuario_user = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['usuarios'] = $usuario;
    header('Location: /traktor/pagina inicial/php/painel.php');
    exit();
}
else{
    $_SESSION['nao_indentificado'] = true;
    header('Location: /traktor/pagina inicial/login_acess.php');
    exit();
}