<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
	$nameboats = mysqli_escape_string($connect, $_POST['nameboats']);
	$price = mysqli_escape_string($connect, $_POST['price']);
	$cidade = mysqli_escape_string($connect, $_POST['cidade']);
	$boatsize = mysqli_escape_string($connect, $_POST['boatsize']);
	$boatdescription = mysqli_escape_string($connect, $_POST['boatdescription']);

	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE boats SET nameboats = '$nameboats', price = '$price', cidade = '$cidade', boatsize = '$boatsize', boatdescription = '$boatdescription' WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../index.php');
	endif;
endif;