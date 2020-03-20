<?php
session_start();
include ('verificar-login.php');
?>

<h2>Olá,<?php echo $_SESSION['usuario_user'];?></h2>
<h2><a href="/traktor/pagina inicial/login_acess.php">Sair</a></h2>