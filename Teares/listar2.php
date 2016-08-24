<?php
include("includes/header.php");
?>
		<div class="row">
		<?php
			session_start();
			if(isset($_SESSION['user']) and isset($_SESSION['password'])) {
				include("logout_bar.php");
			}
			$conexao = mysqli_connect("localhost", "root", "root") or die('Não foi possível conectar');
			mysqli_select_db($conexao, "teares");
			$query = "SELECT id, nome, telefone, preco, imagem FROM teares";
			$dados = mysqli_query($conexao,$query) or die(mysqli_error());
			while ($linha = mysqli_fetch_assoc($dados)) {
				
		?>
			<div class="col-md-4">
				<div class="thumbnail itemcard">
					<div class="leftcontent">
						<img src="<?php echo $linha['imagem']?>">
					</div>
					<div class="rightcontent">
						<span class="lead"><?php echo $linha['nome'];?></span><br>
						<span><?php echo "Telefone: ".$linha['telefone'];?></span><br>
						<span><?php echo "Preço: "."R$".str_replace(".", ",", $linha['preco']);?></span><br>
						<?php
						if(isset($_SESSION['user']) and isset($_SESSION['password'])) {

						?>
							<div style="display:flex">
								<a class="btn btn-warning button" href="edicao.php?id=<?php echo $linha['id'];?>">Editar</a>
								<a class="btn btn-danger button" href="rotinas/exclusao.php?id=<?php echo $linha['id'];?>">Excluir</a>
							</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>


		<?php
			}
		?>
		</div>
<?php
include("includes/footer.php");
?>
