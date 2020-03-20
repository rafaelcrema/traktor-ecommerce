<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAKTOR</title>
</head>
<body>
    <div class="conteiner-login">
        <?php
            if(isset($_SESSION['nao_indentificado'])):
        ?>
        <div class="mensagem_erro">
            <p>ERRO: Usuario ou Senha incorretos</p>
        </div>
        <?php 
        endif; unset($_SESSION['nao_indentificado']);
        ?>
        <div class="box">
            <form action="php/login.php" method="POST">
                <div class="field">
                    <div class="control">
                        <input name="usuario_user" type="text" class="input is-large" placeholder="Seu Usuario" autofocus="">
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <input name="senha" type="password" class="input is-large" placeholder="Sua Senha" autofocus="">
                    </div>
                </div>
                <button type="submit" class="botao-entrar">Entrar</button>
                <p><a href="/traktor/pagina inicial/php/cadastrar.php">Cadastrar</a></p>
            </form> 
        </div>
    </div>
</body>
</html>