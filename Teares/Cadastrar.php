<?php
	session_start();
	if(isset($_SESSION['user']) and isset($_SESSION['password'])) {
		include("logout_bar.php");
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="http://plentz.github.io/jquery-maskmoney/javascripts/jquery.maskMoney.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
   $(".preco").maskMoney({symbol:'R$ ', showSymbol:true, thousands:'.', decimal:',', symbolStay: true});
});
</script>
	
</head>
<body>
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
</body>
</html>
<?php
	} else {
		header("location:login.php");
	}
?>