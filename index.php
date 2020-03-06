<?php include("php/db/database.php"); ?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Inico</title>
<link rel="stylesheet" type="text/css" media="screen and (min-width: 1350px)" href="style.css" >
<link rel="stylesheet" media="screen and (max-width: 1020px)" href="widescreen.css">
<link rel="stylesheet" media="screen and (max-width: 936px)" href="mediumcreen.css">
<link rel="stylesheet" media="screen and (max-width: 600px)" href="smallscreen.css">
</head>

<body>
<script src="subirpagina.js"></script>
<script src="script.js"></script>

<div class="responsive">
    <div class="menu">
        <div class="header">
            <div class="links">
                <a href="site-fa/index-fa.html">Futebol Americano</a>
                <a href="#passeio">Passeio</a>
                <a href="#colecao">Coleções</a>
            </div>
                <div class="logo">      
                    <img src="IMAGENS/logo traktor.png" alt="Home">
                </div>
            <div class="redes-sociais">
                <a href="https://www.facebook.com/traktorfa" target="_blank"><img src="IMAGENS/facebook.png" alt=""></a>
                <a href="https://www.instagram.com/p/B5somIgDsuw/?hl=pt-br" target="_blank"><img src="IMAGENS/instagram.png" alt=""></a>
                <a href="https://www.youtube.com/watch?v=X8kt-QxYUKs" target="_blank"><img src="IMAGENS/youtube.png" alt=""></a>
                <a href=" http://api.whatsapp.com/send?1=pt_BR&phone=5511953898259" target="_blank"><img src="IMAGENS/whatsapp.png" alt=""></a>
            </div>
        </div>

        <div id="detalizin">
        </div>

        <div id="imagens">
            <div class="imagem1">
                <a href="site-fa/index-fa.html">
                        <img src="imagens/jogo-vasco.png" alt="">
                </a>
                <div id="coment1"><strong>Futebol Americano</strong><br>Para jogadores<br>para fãns do esporte</div>
            </div>
            <div class="imagem2">
                <a href="https://traktor.com.br/" target="_blank" rel="noopener noreferrer">
                    <img src="IMAGENS/modelos-loja2.png" alt="">
                </a>
                <div id="coment2"><strong>Street Wear</strong><br>O estilo do F. Americano<br>em roupas para o lazer</div>
            </div>
        </div>

        <div class="footer">
                <div class="logo-footer">
                    <img src="IMAGENS/LOGO 15 ANOS.png" alt="">
                    <p><strong>TRAKTOR</strong><br>Jogue com o melhor<br>uniforme do Brasil</p>
                    <div class="barra"></div> 
                </div>
                    <div class="conteiner-footer">
                        <div class="produtos">
                            <p><strong>PRODUTOS</strong></p>
                            <a href="#FullPad">Full Pad</a>
                            <a href="#Flag">Flag</a>
                            <a href="#treino">Treino</a>
                            <a href="#calças">Calças</a>
                            <a href="#passeio">Passeio</a>
                        </div>
                        <div class="termos">
                            <p><strong>SUPORTE</strong></p>
                            <a href="#trocas">Trocas e Devoluções</a>
                            <a href="#termos">Termos e Condições de uso</a>
                            <a href="#prazo">Prazos de produção</a>
                        </div>
                        <div class="endereço">
                            <p><strong>Endereço</strong></p>
                            <a>Raqueta Provensano, 87A</a>
                            <a>Chacara California</a>
                            <a>São Paulo,SP</a>
                            <a>CEP: 03404-030</a>
                        </div>
                    </div>
                    <div class="container">
                        <form action="/action_page.php">
                        <label for="fname">E-mail</label>
                        <input type="text" id="fname" name="firstname" placeholder="E-mail...">
                    
                        <label for="lname">Nome</label>
                        <input type="text" id="lname" name="lastname" placeholder="Nome...">
                    
                        <label for="subject">Mensagem</label>
                        <textarea id="subject" name="subject" placeholder="Mensagem..." style="height:100px"></textarea>
                    
                        <input type="submit" value="Enviar">
                        </form>
                    </div>
                    <div class="direitos">
                        <div class="barra-direitos">
                            <p>@2020 TRAKTOR | Desde 2005 | todos os direitos para www.traktor.com.br</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
