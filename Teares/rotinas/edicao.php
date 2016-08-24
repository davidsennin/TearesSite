<?php
	$conexao = mysqli_connect("localhost", "root", "") or die('Não foi possível conectar');
	mysqli_select_db($conexao, "teares");

	$id = $_POST['inID'];
	$nome = $_POST['inNome'];
	$telefone = $_POST['inTelefone'];
	$preco = $_POST['inPreco'];
	$imagem = null;
	$sql = "UPDATE teares SET  "	;
	$sql .= "nome='".$nome."', telefone='".$telefone."', preco=".$preco." WHERE id=".$id;
	echo $sql;
	$resultado = mysqli_query($conexao, $sql);
	?>
<html>
 <title>Titulo do site</title>
 <head>
 <meta http-equiv="refresh" content="50" url="localhost/Teste">
 </head>
 <body>
<?php
	if($resultado) {
		echo "Tear editado com sucesso";
	} else {
		echo "Deu ruim";
	}
?>
</body>
</html>