<?php



	$conexao = mysqli_connect("localhost", "root", "root") or die('Não foi possível conectar');
	mysqli_select_db($conexao, "teares");
	$query = "SELECT user, password FROM usuario WHERE user='".$_POST['inUser']."' and password = '".$_POST['inPass']."'";
	$dados = mysqli_query($conexao,$query) or die(mysqli_error());

	session_start();
	$resultado = mysqli_query($conexao, $query);




	if ($linha = mysqli_fetch_assoc($dados)){
		$_SESSION['user'] = $linha['user'];
		$_SESSION['password'] = $linha['password'];
		header("location:..\listar2.php");
	} else {
		unset($_SESSION['user']);
		unset($_SESSION['password']);
		header('location:..\login.php');
	}
?>