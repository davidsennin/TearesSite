<?php  
	include("/includes/header.php");
	session_start();
	if(isset($_SESSION['user']) and isset($_SESSION['password'])) {
		include("logout_bar.php");
?>
	<form method="POST" action="rotinas\cadastro.php" enctype="multipart/form-data">
		<label>Nome:</label>
		<input type="text" name="inNome">

		<label>Telefone:</label>
		<input type="text" name="inTelefone">

		<label>Preço:</label>
		<input type="text" name="inPreco" class="preco">

		<label>Imagem:</label>
		<input type="file" name="inImagem">

		<input type="submit" name="inSubmit" value="Cadastrar">
		<input type="reset" name="inReset" value="Limpar">
	</form>
<?php
	} else {
		header("location:login.php");
	}
?>
<?php  
include("/includes/footer.php");
?>


