<?php
	
		$conexao = mysqli_connect("localhost", "root", "") or die('Não foi possível conectar');
		mysqli_select_db($conexao, "teares");
		$id = $_GET['id'];

		$sql = "DELETE from teares WHERE id=".$id;
		echo $id;
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
			echo "Tear removido com sucesso";
		} else {
			echo "Deu ruim";
		}
	
?>
</body>
</html>