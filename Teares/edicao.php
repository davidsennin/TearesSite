<?php
	session_start();
	if(!isset($_SESSION['user']) or !isset($_SESSION['password'])) {
		header("location:login.php");
	}
	include("logout_bar.php");
	$conexao = mysqli_connect("localhost", "root", "") or die('Não foi possível conectar');
	mysqli_select_db($conexao, "teares");
	$query = "SELECT id, nome, telefone, preco FROM teares WHERE id=".$_GET['id'];
	$dados = mysqli_query($conexao,$query) or die(mysqli_error());

	$resultado = mysqli_query($conexao, $query);
	if($linha = mysqli_fetch_assoc($dados)) {
?>
	<form method="POST" action="rotinas\edicao.php">
		<input type="hidden" name="inID" value="<?php echo $linha['id']?>">
		<label>Nome:</label>
		<input type="text" name="inNome" value="<?php echo $linha['nome']?>">

		<label>Telefone:</label>
		<input type="text" name="inTelefone" value="<?php echo $linha['telefone']?>">

		<label>Preço:</label>
		<input type="text" name="inPreco"" value="<?php echo $linha['preco']?>">

		<input type="submit" name="inSubmit" value="Editar">
		<input type="reset" name="inReset" value="Limpar">
	</form>

<?php
	} else {
		echo "Dado não encontrado";
	}

?>