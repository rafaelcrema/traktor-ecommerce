<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAKTOR</title>
</head>
<body>

    <div id="container_cadastro">
        <form action="cadastro_cliente_db.php" method="post">
        <div class="usuario_user">
    <input type="text" name="usuario" id="usuario" placeholder="Usuario">
            <input type="email" name="email" class="email" placeholder="E-mail (Obrigatorio)">
            <?php
            echo "<script>('Login ou email já cadastrdo')</script>";
            exit();
            ?>
        </div>
        <div class="nome_user">
            <input type="text" name="nome_user" class="nome_user" placeholder="Primeiro Nome (obrigatorio)">
            <input type="text" name="sobrenome_user" class="sobrenome_user" placeholder="Sobrenome (obrigatorio)">
        </div>
        <div class="dados_user">
            <input type="number" name="cpf" class="cpf" placeholder="CPF (obrigatorio)">
            <input type="number" name="rg" class="rg" placeholder="RG (Não Obrigatorio)">
        </div>
        <div class="telefone_user">
            <input type="tel" name="numero_fixo" class="numero_fixo" placeholder="Telefone Fixo (Não Obrigatorio)">
            <input type="tel" name="celuler" class="celular" placeholder="Celular (Obrigatorio)">
        </div>
        <div class="endereço">
            <input type="endereco" name="endereco" class="endereco" placeholder="Endereço">
            <input type="number" name="numero" class="numero" placeholder="Nº:">
            <input type="text" name="bairro" class="bairro" placeholder="Bairro">
            <input type="text" name="cidade" class="cidade" placeholder="Cidade">
            <input type="text" name="estado" estado="estado" placeholder="UF">
            <input type="number" name="cep" class="cep" placeholder="CEP">
        </div>
        <div class="senha">
            <input type="password" name="senha" class="senha" placeholder="Senha">
        </div>
        <button type="submit" class="botao_cadastrar">Cadastrar</button>

        </form>
    </div>
</body>
</html>