<?php
	include('connection.php');

	$nome           = $_POST['nome'];
	$descricao      = $_POST['descricao'];
	$data           = $_POST['data'];
	$endereco       = $_POST['endereco'];
    $qtde_ingressos = $_POST['qtde_ingressos'];
    $valor_ingresso = $_POST['valor_ingresso'];
	$tipo           = $_POST['tipo'];

	$sql = "INSERT INTO evento VALUES (null, '{$nome}', '{$descricao}', '{$data}', '{$endereco}', '{$qtde_ingressos}', '{$valor_ingresso}', '{$tipo}')";
	$query = mysqli_query($conexao, $sql);

	header('Location: dashboard.php');
	mysqli_close($conexao);
?>