<?php
	include('connection.php');

	$id             = $_POST['id'];
	$nome           = $_POST['nome'];
	$descricao      = $_POST['descricao'];
	$data           = $_POST['data'];
	$endereco       = $_POST['endereco'];
    $qtde_ingressos = $_POST['qtde_ingressos'];
    $valor_ingresso = $_POST['valor_ingresso'];
	$tipo           = $_POST['tipo'];
	
	$sql = "UPDATE evento SET nome = '{$nome}', descricao = '{$descricao}', data = '{$data}', endereco = '{$endereco}', qtde_ingressos = '{$qtde_ingressos}', valor_ingresso = '{$valor_ingresso}', tipo = '{$tipo}' WHERE id = {$id}";
	
	$query = mysqli_query($conexao, $sql);
	header('Location: dashboard.php');
			
	mysqli_close($conexao);
?>