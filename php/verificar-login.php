<?php

if(!$_SESSION ['usuario_user']){
    header('location: /traktor/pagina inicial/php/painel.php');
    exit();
}