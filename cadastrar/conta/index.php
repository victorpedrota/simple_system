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
			<link rel="shortcut icon" href="../../imagens/logo.jpg">
			<link rel="stylesheet" href="../../bootstrap/dist/css/bootstrap.min.css">		
			<link rel="stylesheet" href="../../externo/fontawesome/css/all.css">
			<link rel="stylesheet" type="text/css" href="../../externo/css/padrao.css">
			

	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="../../index.php">
				<img src="../../imagens/logo.jpg" width="30" height="30" alt="">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="margin-left: 0px;">

					<li class="nav-item">
						<form class="form-inline" style="margin-left: 5px;">
							<input class="form-control mr-sm-2 box" id="search" placeholder="Pesquisar..">
						</form>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item divisoria"><a class="nav-link" href="../../login/">Entrar</a></li>
					<li class="nav-item"><a class="nav-link" href="../../cadastrar/conta/">Cadastrar Conta</a></li>
				</ul>
			</div>
		</nav>

		<div class="container" style="margin-top: 40px;"> 
			<div class="row"><div class="card-group" style="width: 100%">
				<div class="card">

					<div class="card-body">
						<h5 class="card-title">Passo 1:</h5>
						<p class="card-text">Configure sua conta.</p>
					</div>

				</div>
				<div class="card">

					<div class="card-body">
						<h5 class="card-title">Passo 2:</h5>
						<p class="card-text">Escolha seu usuário.</p>
					</div>

				</div>
				<div class="card">

					<div class="card-body">
						<h5 class="card-title">Passo 3:</h5>
						<p class="card-text">Configures sua experiencia.</p>
					</div>

				</div>
			</div></div>
			<br>
			<div class="row">

				<div class="col" id="step1" style="display: block;">
					<div class="form-group">
						<label for="exampleInputEmail1">Nickname</label>
						<input type="email" class="form-control" id="nickname" aria-describedby="emailHelp" placeholder="Enter email">

					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Senha</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
					
					<button id="next" class="btn btn-primary">Próximo</button>
				</div>
				<div class="col" id="step2"  style="display: none;">
					<div class="form-group">
						<label for="exampleInputEmail1">Nome:</label>
						<input type="email" class="form-control" id="c_nome" placeholder="Nome">
						<label for="exampleInputEmail1">Sobrenome:</label>
						<input type="email" class="form-control" id="sobrenome" placeholder="Sobrenome">
						<label for="exampleInputEmail1">Email</label>
						<input type="email" class="form-control" id="c_email"  placeholder="Enter email">

					</div>

					<button id="back" class="btn btn-primary">Voltar</button>
					<button id="next2" class="btn btn-primary">Próximo</button>
				</div>
				<div class="col" style="display: none" id="step3">
				Escolha a foto:<br>
				<div class="row">
					<div class="col"><img src="../../imagens/profile.jpg" id="profile" style="width: 200px;height: 200px;object-fit: none; margin-top: 10px; margin-bottom: 10px;" ></div>
					<div class="col">
						<div class="row">
						<div class="col"><h6>Nome:</h6><p id="nome"></p><br>
						<h6>Email:</h6><p id="email"></p><br></div>
						<div class="col"> <h6>Nickname:</h6><p id="nick"></p><br></div>
						</div>
						
					</div>
				</div>
				
				<br>
				<button id="back2" class="btn btn-primary">Voltar</button>
					<button id="enviar" class="btn btn-primary">Enviar</button>
			</div>
				<div class="col">
					<div class="card float-right" style="width: 18rem;">
						<ul class="list-group list-group-flush">
							<li class="list-group-item">Cras justo odio</li>
							<li class="list-group-item">Dapibus ac facilisis in</li>
							<li class="list-group-item">Vestibulum at eros</li>
						</ul>
					</div>
				</div>

			</div>

		</div>



		<footer class="footer">
			<div class="container">

			</div>
		</footer>
		<script src="../../externo/js/jquery-3.4.0.min.js"></script>
		<script>
			$(document).ready(function(){
			
				$("#search").focus(function(){
					if ($(this).val() == "") {$(this).animate({width:'+=250px'})}

				});
				$("#search").focusout(function(){
					if ($(this).val() == "") {
						$(this).animate({width:'-=250px'})
					}

				});
				$("#next").click(function(){

					$("#step1").css("display","none");
					$("#step2").css("display","block");
					$("#step3").css("display","none");
				})
				$("#next2").click(function(){

					$("#step1").css("display","none");
					$("#step2").css("display","none");
					$("#step3").css("display","block");
					$("#email").html("")
					$("#email").append($("#c_email").val())
					$("#nick").html("")
					$("#nick").append($("#nickname").val())
					$("#nome").html("")
					$("#nome").append($("#c_nome").val() + ' ' + $("#sobrenome").val()) 
				})
				$("#back").click(function(){
					$("#step3").css("display","none");
					$("#step2").css("display","none");
					$("#step1").css("display","block");
				})
				$("#back2").click(function(){
					$("#step3").css("display","none");
					$("#step2").css("display","block");
					$("#step1").css("display","none");
				})
				$("#profile").mouseenter(function(){

					$(this).animate({opacity: 0.6}, 100)
				}).mouseleave(function() {
					$(this).animate({opacity: 1}, 100)
				})
			})
		</script>

	</body>
	</html><?php
}
else{
	?>
	<script language='JavaScript'>
		document.location.href="../../menu/perfil/index.php";
	</script>             
	<?php 
}
