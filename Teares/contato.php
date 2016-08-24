<?php  
include("/includes/header.php");
?>
    <div class="formHeader">
		<span>
			<h1>Contato</h1>
		</span>
	</div>
	<div class="divForm">
		<form action="destino.php" method="POST">
			<div class="form_group">
				<label class="formText">Nome:</label>
				<div class="formInput">
					<input type="text" name="inNome">
				</div>
			</div>
			<div class="form_group">
				<label class="formText">E-Mail de contato:</label>
				<div class="formInput">
					<input type="text" name="inEMail">
				</div>
			</div>
			<div class="form_group">
				<label class="formText">Idade:</label>
				<div class="formInput">
					<input type="text" name="inIdade">
				</div>
			</div>
			<div class="form_group">
				<label class="formText">Texto:</label>
				<div class="formTextArea">
					<textarea name="taTexto" rows="5"></textarea>
				</div>
			</div>
			<div class="form_group">
				<input type="submit" class="formSubmit" name="inSubmit" value="Enviar">
				<input type="reset" class="formClear" name="inReset" value="Limpar">
			</div>
		</form>
	</div>
<?php  
include("/includes/footer.php");
?>