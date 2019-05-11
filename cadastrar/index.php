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
					<p style="margin-top: 5px;">Novo por aqui? <a href=""> Criar conta</a></p>
				</div></center>

			</div>



			<footer class="footer">
				<div class="container">

				</div>
			</footer>
			<script src="../../externo/js/jquery-3.4.0.min.js"></script>
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
