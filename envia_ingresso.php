<?php
    include("connection.php");

    $sql = "SELECT usuario.nome AS nome_usuario,
                   usuario.cpf AS cpf_usuario,
                   usuario.email AS email_usuario,
                   evento.nome AS nome_evento,
                   evento.data AS data_evento
            FROM venda
            INNER JOIN usuario ON (venda.id_usuario = usuario.id)
            INNER JOIN evento ON (venda.id_evento = evento.id)";
    $query = mysqli_query($conexao, $sql);
    $item = mysqli_fetch_array($query, MYSQLI_ASSOC);

    $nome_usuario = $item['nome_usuario'];
    $cpf_usuario = $item['cpf_usuario'];
    $email_usuario = $item['email_usuario'];
    $nome_evento = $item['nome_evento'];
    $data_evento = $item['data_evento'];

    $arquivo = "
        <html>
            <table>
                <tr>
                    <td>
                <tr>
                    <td>$nome_usuario</td>
                </tr>
                <tr>
                    <td>$cpf_usuario</td>
                </tr>
                <tr>
                    <td>$nome_evento</td>
                </tr>
                <tr>
                    <td>$data_evento</td>
                </tr>

                </td>
                </tr>

            </table>
        </html>
    ";

    $destino = $email_usuario;
    $assunto = "Ingresso para o evento $nome_evento";

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: EasyTicket <easyticket.esucri@gmail.com>';

    $enviaremail = mail($destino, $assunto, $arquivo, $headers);
    if($enviaremail){
        $mgm = "E-mail enviado com sucesso.";
        echo " <meta http-equiv='refresh' content='10;URL=compras_list.php'>";
    } else {
        $mgm = "Erro ao enviar e-mail.";
        echo "";
    }

	mysqli_close($conexao);
?>