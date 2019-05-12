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

		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Perfil</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="shortcut icon" href="../../imagens/logo.jpg">
			<link rel="stylesheet" href="../../bootstrap/dist/css/bootstrap.min.css">
			<link rel="stylesheet" href="../../externo/fontawesome/css/all.css">
			<link rel="stylesheet" type="text/css" href="../../externo/css/padrao.css">
		</head>
		<body>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand" href="index.php">
					<img src="../../imagens/logo.jpg" width="30" height="30" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="margin-left: 0px;">
						
					</ul>
					<ul class="navbar-nav ml-auto">
						<li class="nav-item divisoria"><a class="nav-link" href="login/">Entrar</a></li>
						<li class="nav-item"><a class="nav-link" href="logout.php">Sair</a></li>
					</ul>
				</div>
			</nav>

		</body>
		</html>
		<?php


	}
