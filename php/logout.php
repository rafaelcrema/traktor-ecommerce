<?php
session_start();
session_destroy();
header('location /traktor/pagina inicial/login_acess.php');
exit();