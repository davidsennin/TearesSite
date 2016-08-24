<?php

	$conexao = mysqli_connect("localhost", "root", "") or die('Não foi possível conectar');
	mysqli_select_db($conexao, "teares");

	$nome = $_POST['inNome'];
	$telefone = $_POST['inTelefone'];
	$preco = $_POST['inPreco'];

	$imagem = $_FILES['inImagem'];
	$tamanho = $imagem['size'];

	/*echo $imagem['tmp_name'];
	$conteudo = NULL;
	if ($imagem['tmp_name'] != "none") {
      $fp = fopen($imagem['tmp_name'], "rb");
      $conteudo = fread($fp, $tamanho);
      $conteudo = addslashes($conteudo);
      fclose($fp);
	}*/
	$nomeFinal = "";
	$conteudo = NULL;
	if($imagem != NULL) {
		echo getcwd()."<br>";
		$nomeImg = "teares/".time().'.jpg';
		$nomeFinal = $_SERVER['DOCUMENT_ROOT']."/Teste/".$nomeImg;
		echo $imagem['tmp_name']."<br>".$imagem['tmp_name']."<br>";
		echo $nomeFinal;
		if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
			echo "Entrou no move";
//			$tamanhoImg = filesize($nomeFinal); 
//			$conteudo = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));
		}
	}
	//echo $conteudo;

	echo $preco."<br>";
	$find= array(".", ",");
	$replace = array("", ".");
	$preco = str_replace($find, $replace, $preco);
	echo $preco."<br>";

	$sql = "INSERT INTO teares (nome, telefone, preco, imagem) VALUES "	;
	$sql .= "('".$nome."', '".$telefone."', '".$preco."', '".$nomeImg."')";

	//unlink($nomeFinal);

	$resultado = mysqli_query($conexao, $sql) or trigger_error($conexao->error."[ $sql]");;
	?>
<html>
 <title>Titulo do site</title>
 <head>
 <meta http-equiv="refresh" content="5000" url="localhost/Teste">
 </head>
 <body>
<?php
	if($resultado) {
		echo "Tear inserido com sucesso";
	} else {
		throw new Exception(mysqli_error($conexao)."[ $sql]");
	}
?>
</body>
</html>