<?php
	session_start();
	include('connection.php');

	$id = $_GET['id'];

	$sql = "INSERT INTO venda VALUES (null, '{$_SESSION['id']}', '{$id}')";
	
	$query = mysqli_query($conexao, $sql);

	$sql1 = "UPDATE evento SET qtde_ingressos = qtde_ingressos-1 WHERE id = '{$id}'";
	
	$query1 = mysqli_query($conexao, $sql1);

	header('Location: envia_ingresso.php');

	mysqli_close($conexao);
?>