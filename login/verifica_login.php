<?php
$login = $_POST['c_login'];
$senha = $_POST['c_senha'];
require('../externo/php/connect.php');
//$senhac = base64_encode($senha);
//$sql_pesquisa ="select * from `login` where `login` = '$login' && `senha` = '$senhac'";
$sql_pesquisa ="select * from `login` where `login` = '$login' && `senha` = '$senha'";
$resultado = mysqli_query($conn,$sql_pesquisa); 
$numero = mysqli_num_rows($resultado);
$vetor_login = mysqli_fetch_array($resultado);
$cod_login = $vetor_login['cod_login'];
if($numero != 1)
{
	echo "<div class='alert alert-danger' role='alert'>
	Usuario ou senha incorretos
	</div>";
}
else
{
	//inicar sessão
	session_start();
	$_SESSION["system_control"] = 1;
    $_SESSION["cod_login"] = $vetor_login['cod_login'];
	?>
	<script language='JavaScript'>
		document.location.href="../menu/perfil/index.php";
	</script>             
	<?php 
}
?>  