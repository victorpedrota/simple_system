	<?php
    //Mantendo a sessão/cria uma sessao
	session_start();
	if(!isset($_SESSION["system_control"]))
	{
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Login</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="shortcut icon" href="../imagens/logo.jpg">
			<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
			<link rel="stylesheet" href="../externo/fontawesome/css/all.css">
			<link rel="stylesheet" type="text/css" href="../externo/css/padrao.css">

	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="index.php">
				<img src="../imagens/logo.jpg" width="30" height="30" alt="">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="margin-left: 0px;">
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link" href="../">Página Inicial</a></li>
					<li class="nav-item"><a class="nav-link" href="index.php">Entrar</a></li>
				</ul>
			</div>
		</nav>
		<div class="container-fluid" style="margin-top: 40px;">
			<center><img width="150px;" src="../imagens/semfundo.png">
				<br>
				<div class="card" style="width: 22rem;margin-top: 30px;">
					<div class="card-body">


						<div class="form-group">
							<label for="exampleInputEmail1">Login:</label>
							<input type="text" class="form-control" id="login" name="c_login" placeholder="Login">

						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Senha:</label>
							<input type="password"  class="form-control" id="senha" name="c_senha" placeholder="Senha">
						</div>
						<div id="erro"></div>

						<button id="enviar" class="btn btn-primary">Entrar</button>


					</div>

				</div>
				<div class="card" style="width: 22rem;margin-top: 10px;height: 3rem;">
					<p style="margin-top: 5px;">Novo por aqui? <a href="../cadastrar/conta"> Criar conta</a></p>
				</div></center>

			</div>



			<footer class="footer">
				<div class="container">
					<span class="text-muted"><center>2019 - made by pac</center></span>
				</div>
			</footer>
			<script src="../externo/js/jquery-3.4.0.min.js"></script>
			<script>
				$(document).ready(function(){
					$("#enviar").click(function(){
						senha = $("#senha").val();
						login = $("#login").val();
						$.post( "verifica_login.php", { c_login: login, c_senha: senha })
						.done(function( data ) {
							$("#erro").html("");
							$("#erro").append(data);
						});
					})

				})
			</script>

		</body>
		</html><?php
	}
	else{
		?>
		<script language='JavaScript'>
			document.location.href="../menu/perfil/index.php";
		</script>
		<?php
	}
