<?php
	session_start();
	include('connection.php');

	$login = $_POST['login'];
	$senha = $_POST['senha'];

	if($login == "" or $senha == "") {
		echo "<script> alert('Preencha todos os campos.'); location.href='login_page.php'</script>";
	} else {
		$sql = "SELECT * FROM usuario WHERE login = '{$login}' AND senha = '{$senha}'";
		$query = mysqli_query($conexao, $sql);
		$usuario = mysqli_num_rows($query);
		
		if ($usuario == 1) {
			$item = mysqli_fetch_array($query, MYSQLI_ASSOC);
			$_SESSION['id'] = $item["id"];
			$_SESSION['usuario'] = $item["login"];
			$_SESSION['permissao'] = $item["permissao"];
			header('Location: src/index.php');				
		}	
		mysqli_close($conexao);
	}
?>