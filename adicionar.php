<?php
// Header
include_once 'includes/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo barco </h3>
		<form action="php_action/create.php" method="POST">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="price" id="price">
				<label for="price">Preço</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="cidade" id="cidade">
				<label for="cidade">Cidade</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="boatsize" id="boatsize">
				<label for="boatsize">Tamanho</label>
			</div>
			
			<div class="input-field col s12">
				<input type="text" name="boatescription" id="boatdescription">
				<label for="boatdescription">Descrição</label>
			</div>

			<button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
			<a href="index.php" class="btn green"> Lista de Barcos </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
