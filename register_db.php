<?php
	include('connection.php');

	$nascimento = $_POST['nascimento'];
    list($ano, $mes, $dia) = explode('-', $nascimento);
    $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
    $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
    $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);

	if($_POST) {
		$nome      = $_POST['nome'];
		$login     = $_POST['login'];	
		$cpf       = $_POST['cpf'];
		$email     = $_POST['email'];
		$senha     = $_POST['senha'];
		$confirmar = $_POST['confirmar'];

		if ($nome == "" or $login == "" or $cpf == "" or $email == "" or $senha == "" or $confirmar == "") {
			echo "<script> alert('Preencha todos os campos.'); location.href='register_page.php'</script>";
		} else if ($idade < 18) {
			echo "<script> alert('Para realizar o cadastro deverá ser maior de idade.'); location.href='register_page.php'</script>";
		} else if ($senha <> $confirmar) {
			echo "<script> alert('Senhas não conferem.'); location.href='register_page.php'</script>";
		} else {
			$senha = $_POST['senha'];
			
			$sql = "INSERT INTO usuario VALUES (null, '{$nome}', '{$login}', '{$senha}', '{$cpf}', '{$email}', 2)";
			
			$query = mysqli_query($conexao, $sql);
			if($query) {
				header('Location: src/index.php');
			} else {
				header('Location: register_page.php?erro=2&msg='.mysqli_error($conexao));
			}

			mysqli_close($conexao);
		}
	}
?>