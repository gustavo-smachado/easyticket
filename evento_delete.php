<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>EasyTicket</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<form action="envia_devolucao.php" method="post">
			<?php
				$id = $_GET['id'];
			?>
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<p>Confirma exclusão do registro? <?php echo $id; ?>?</p>
			<button type="submit">Sim</button>
			<a href="dashboard.php"><button type="button">Não</button></a>
		</form>
	</body>
</html>