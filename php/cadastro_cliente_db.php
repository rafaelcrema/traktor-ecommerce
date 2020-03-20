<?php 

include_once("./conexao.php");

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$nome_user = $_POST['nome_user'];
$sobrenome_user = $_POST['sobrenome_user'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$numero_fixo = $_POST['numero_fixo'];
$celular = $_POST['celular'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$senha = $_POST['senha'];



$result_usuario = "INSERT INTO usuarios(usuario_user, email_user, nome_user, sobrenome_user, cpf, rg, telefone, celular, endereco, numero, bairro, cidade, estado, senha, cep) 
VALUES ('$usuario','$email','$nome_user','$sobrenome_user','$cpf','$rg','$numero_fixo','$celular','$endereco','$numero','$bairro','$cidade','$estado',md5('$senha'),'$cep')";

$result_usuario = mysqli_query($conexao, $result_usuario);

if(mysqli_affected_rows($conexao) != 0){
    echo "<script>alert('Cadastro efetuado com Sucesso!);</script>";
    header('location: /traktor/pagina inicial/login_acess.php');
}
else{
    echo "<script>alert('Usuario não foi cadastrado com Sucesso!);</script>";
    header('location: /php/cadastrar.php');
}
