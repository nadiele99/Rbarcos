<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';
// Clear
function clear($input) {
	global $connect;
	// sql
	$var = mysqli_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}

if(isset($_POST['btn-cadastrar'])):
	$nameboats = clear($_POST['nameboats']);
	$price = clear($_POST['price']);
	$cidade = clear($_POST['cidade']);
	$boatsize = clear($_POST['boatsize']);
	$boatdescription = clear($_POST['boatdescription']);

	$sql = "INSERT INTO boats (nameboats, price, cidade, boatsize, boatdescription) VALUES ('$nameboats', '$price', '$cidade', '$boatsize', '$boatdescription')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../index.php');
	endif;
endif;