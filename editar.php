<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Select
if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM clientes WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Editar barco </h3>
		<form action="php_action/update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
			<div class="input-field col s12">
				<input type="text" name="nameboats" id="nameboats" value="<?php echo $dados['nameboats'];?>">
				<label for="nome">Nome Barco</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="price" value="<?php echo $dados['price'];?>" id="price">
				<label for="sobrenome">price</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['cidade'];?>" name="cidade" id="cidade">
				<label for="cidade">cidade</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['boatsize'];?>" name="boatsize" id="boatsize">
				<label for="boatsize">tamanho</label>
			</div>
			
			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['boatdescription'];?>" name="boatdescription" id="boatdescription">
				<label for="boatdescription">boatdescription</label>
			</div>

			<button type="submit" name="btn-editar" class="btn"> Atualizar</button>
			<a href="index.php" class="btn green"> Lista de barcos </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
