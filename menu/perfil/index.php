<?php
    //Mantendo a sessão/cria uma sessao
session_start();
if(!isset($_SESSION["system_control"]))
{
	?>
	<script language='JavaScript'>
		document.location.href="../../login/";
	</script> 
	<?php
}
else{
	echo "foi";
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Perfil</title>
	</head>
	<body>
		<a href="logout.php">logout</a>
	</body>
	</html>
	<?php

	
}