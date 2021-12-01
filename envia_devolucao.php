<?php
    include("connection.php");

    $sql = "SELECT usuario.nome AS nome_usuario,
                   usuario.email AS email_usuario,
                   evento.nome AS nome_evento,
                   evento.valor_ingresso AS valor_ingresso
            FROM venda
            INNER JOIN usuario ON (venda.id_usuario = usuario.id)
            INNER JOIN evento ON (venda.id_evento = evento.id)";
    $query = mysqli_query($conexao, $sql);
    $item = mysqli_fetch_array($query, MYSQLI_ASSOC);

    $nome_usuario = $item['nome_usuario'];
    $email_usuario = $item['email_usuario'];
    $nome_evento = $item['nome_evento'];
    $valor_ingresso = $item['valor_ingresso'];

    $arquivo = "
        <html>
            <p>Caro $nome_usuario, informamos que o evento $nome_evento foi cancelado, portanto devolvemos a quantia de R$ $valor_ingresso para você.</p>
        </html>
    ";

    $destino = $email_usuario;
    $assunto = "$nome_evento cancelado, devolução de valor";

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: EasyTicket <easyticket.esucri@gmail.com>';

    $enviaremail = mail($destino, $assunto, $arquivo, $headers);
    if($enviaremail){
        $mgm = "E-mail enviado com sucesso.";
        echo " <meta http-equiv='refresh' content='10;URL=dashboard.php'>";
    } else {
        $mgm = "Erro ao enviar e-mail.";
        echo "";
    }

    $id = $_POST['id'];

	$sql = "DELETE FROM evento WHERE id = {$id}";
	$query = mysqli_query($conexao, $sql);

    header('Location: dashboard.php');
	
	mysqli_close($conexao);
?>