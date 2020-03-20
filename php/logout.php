<?php
session_start();
session_destroy();
header('location /traktor/pagina inicial/php/login.php');
exit();