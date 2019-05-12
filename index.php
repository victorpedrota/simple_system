	<!DOCTYPE html>
	<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="imagens/logo.jpg">
		<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="externo/fontawesome/css/all.css">

		<style type="text/css">
		body{
			background: #f9f9f9;
		}
		.divisoria{
			border-right: 0.5px solid rgba(255,255,255, .3);
		}
		.box{

			background-color: #485058b2;
			border: none;
			color:white;
			height: 30px;
		}
		.box:focus{
			background-color:#485058b0;
			color: white;
			box-shadow: none;


		}
		.carousel{
			background-color: #2f363d;

		}
		.col-sm{
			margin-top: 10px;
			margin-bottom: 10px;

		}
		html {
			position: relative;
			min-height: 100%;
		}
		body {
			/* Margin bottom by footer height */
			margin-bottom: 60px;
		}
		.footer {
			position: absolute;
			bottom: 0;
			width: 100%;
			/* Set the fixed height of the footer here */
			height: 60px;
			line-height: 60px; /* Vertically center the text there */
			background-color: #f5f5f5;
		}
		.figure-img:hover {
			-webkit-transform: scale(1.05);
			-moz-transform: scale(1.05);
			-o-transform: scale(1.05);
			-ms-transform: scale(1.05);
			transform: scale(1.05);
			transition-duration: 1s;
		}

		.figure{
			height: 300px;
			width: 300px;
		}




	</style>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php">
			<img src="imagens/logo.jpg" width="30" height="30" alt="">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="margin-left: 0px;">

				<li class="nav-item">
					<form class="form-inline" style="margin-left: 5px;">
						<input class="form-control mr-sm-2 box" type="search" placeholder="Pesquisar.." aria-label="Search">
					</form>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item divisoria"><a class="nav-link" href="login/">Entrar</a></li>
				<li class="nav-item"><a class="nav-link" href="cadastrar/conta/">Cadastrar Conta</a></li>
			</ul>
		</div>
	</nav>
	<div class=" container-fluid carousel">
		<div class="container">
			<div class="row">
				<div class="col-sm">
					<figure class="figure">
						<img src="imagens/generic.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">

					</figure>

				</div>
				<div class="col-sm">
					<figure class="figure">
						<img src="imagens/generic.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">

					</figure>

				</div>
				<div class="col-sm">
					<figure class="figure">
						<img src="imagens/generic.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
					
					</figure>

				</div>
			</div>
		</div>

	</div>
	<div class="container" style="margin-top: 40px; margin-bottom: 40px;text-align:  justify;"> 		Acima de tudo, é fundamental ressaltar que a contínua expansão de nossa atividade promove a alavancagem das formas de ação. Gostaria de enfatizar que a complexidade dos estudos efetuados aponta para a melhoria das diretrizes de desenvolvimento para o futuro. Do mesmo modo, a necessidade de renovação processual estimula a padronização do impacto na agilidade decisória. No entanto, não podemos esquecer que a constante divulgação das informações ainda não demonstrou convincentemente que vai participar na mudança do fluxo de informações.
				 Acima de tudo, é fundamental ressaltar que a contínua expansão de nossa atividade promove a alavancagem das formas de ação. Gostaria de enfatizar que a complexidade dos estudos efetuados aponta para a melhoria das diretrizes de desenvolvimento para o futuro. Do mesmo modo, a necessidade de renovação processual estimula a padronização do impacto na agilidade decisória. No entanto, não podemos esquecer que a constante divulgação das informações ainda não demonstrou convincentemente que vai participar na mudança do fluxo de informações.
				  Acima de tudo, é fundamental ressaltar que a contínua expansão de nossa atividade promove a alavancagem das formas de ação. Gostaria de enfatizar que a complexidade dos estudos efetuados aponta para a melhoria das diretrizes de desenvolvimento para o futuro. Do mesmo modo, a necessidade de renovação processual estimula a padronização do impacto na agilidade decisória. No entanto, não podemos esquecer que a constante divulgação das informações ainda não demonstrou convincentemente que vai participar na mudança do fluxo de informações.


	</div>
	<footer class="footer">
		<div class="container">
			<span class="text-muted"><center>2019 - made by pac</center></span>
		</div>
	</footer>
	<script src="externo/js/jquery-3.4.0.min.js"></script>
	<script>
		$(document).ready(function(){
			$("input").focus(function(){
				if ($(this).val() == "") {$(this).animate({width:'+=250px'})}

			});
			$("input").focusout(function(){
				if ($(this).val() == "") {
					$(this).animate({width:'-=250px'})
				}

			});
		});
	</script>
</body>
</html>
