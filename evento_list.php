<?php
    session_start(); 
	include('connection.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=chrome">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>EasyTicket</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>
    <body>   
	<header> 
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
				<a class="navbar-brand" href="src/index.php">
                    <img src="assets/ticket.png" alt="tickets" class="ticket"> 
                    EasyTicket</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="src/index.php">Home</a>
                      </li>                        

                      <?php
                        if($_SESSION["permissao"] == 1) { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Dashboard</a>
                            </li>     
							<li class="nav-item">
                                <a class="nav-link" href="register_admin.php">Cadastrar administrador</a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php"> Sair </a>
                            </li>                   
                      <?php	} else if($_SESSION["permissao"] == 2) { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="compras_list.php">Compras</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="evento_list.php">Catálogo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php"> Sair </a>
                            </li> 
                        <?php } else { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="login_page.php">Login</a>
                            </li>
                        <?php } ?>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>

        <script type="text/javascript">
                function excluir(id, linha){
                    var retorno = confirm("Deseja realmente excluir?");
                    if(retorno){
                        $.ajax({
                            url            : "evento_delete.php",
                            type           : "POST",
                            dataType       : "JSON",
                            data           : {id: id}
                        });
                        document.getElementById("tableListagem").deleteRow(linha);
                    }
                }
        </script>
	</header>     
		<table id="tableListagem" class="table table-hover table-dark"> 
			<thead>
				<tr>
					<th>Código</th>
					<th>Nome</th>
                    <th>Descrição</th>
                    <th>Data</th>
					<th>Endereço</th>
                    <th>Quantidade de ingressos</th>
                    <th>Valor ingresso</th>
                    <th>Tipo</th>
					<th>Operação</th>
				</tr>
			</thead>
			<tbody id="bodyTabela">
				<?php
					$sql = "SELECT * FROM evento";
					$query = mysqli_query($conexao, $sql);
					if(!$query) {
				?>
				<tr>
					<td colspan="3"><?php echo 'Erro: ' . mysqli_error($conexao); ?></td>
				</tr>
				<?php
					} else {
						while($evento = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
				?>
				<tr>
					<td><?php echo $evento['id']; ?></td>
					<td><?php echo $evento['nome']; ?></td>
                    <td><?php echo $evento['descricao']; ?></td>
                    <td><?php echo $evento['data']; ?></td>
					<td><?php echo $evento['endereco']; ?></td>
                    <td><?php echo $evento['qtde_ingressos']; ?></td>
                    <td><?php echo $evento['valor_ingresso']; ?></td>
                    <td><?php echo $evento['tipo']; ?></td>
					<td>
						<a href="compras_create.php?id=<?php echo $evento['id']; ?>"><img src="assets/cart.png" class="edit"></a>
					</td>
				</tr>
				<?php
						}
					}
				?>
			</tbody>
		</table>
		<footer>
        <div class="container-fluid p-0">
            <div class="row text-center">
                <div class="col-md-4 col-md-12">
                    <h3 class="text-light">About Us</h3>
                    <p class="text-muted">Blablabla events.</p>
                    <div class="pt-4 text-muted">Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
                    <p class="pt-4 text-muted">Copyright ©2021 All rights reserved | This template is made by <span>EasyTicket</span> company.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>

	  <style>
		@import url('https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,300;0,700;1,300&display=swap');

		* {
			box-sizing: border-box;
		}

		header,
		section {
			overflow-x: hidden;
		}

		:root {
			--Alegreya-font: 'Alegreya Sans', sans-serif;
			--light-black: #2e2c2caf;
			--bggradient: linear-gradient(to bottom,
					#b1aeaf, #5c5858);
			--light-gray: #rgba(255, 255, 255, 0.7);
		}

		.header {
			font-family: var(--Alegreya-font);
		}

		header a {
			font-family: var(--Alegreya-font);
			font-weight: bold;
			font-size: 0.9em;
			color: #39595c;
		}

		header {
			background: var(--bs-gray-500);
			overflow-x: hidden;
		}

		.dropdown-content {
			display: none;
			position: absolute;
			background-color: white;
			min-width: 160px;
			box-shadow: 0px 2px 15px 0px rgba(0, 0, 0, 0.2);
			z-index: 1;
		}

		.dropdown-content a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
		}

		.dropdown-content a:hover {
			background-color: #e9ecef;
		}

		.dropdown:hover .dropdown-content {
			display: block;
		}

		header .nav-item:last-child {
			padding-right: 10.5em;
		}

		header .nav-item {
			padding: 0.9em;
		}

		header .navbar-brand {
			padding-left: 8rem;
		}

		header .nav-link {
			color: #39595c;
		}

		header .nav-link:hover {
			color: black;
		}

		header .row .col-md-5 {
			padding: 4.2vmin 1vmin;
		}

		header .row .col-md-7 {
			padding: 22vmin 1vmin;
			padding-bottom: 35vmin;
			font-family: var(--Alegreya-font);
			color: #1b1b1b;
		}

		header .ticket {
			width: 7%;
			transform: rotate(20deg);
		}

		header .row .col-md-5 img {
			width: 90%;
		}

		header .container .col-md-7 h6 {
			padding: 1vmin;
			letter-spacing: 4px;
		}

		header .container .col-md-7 h1 {
			font-size: 6.5vmin;
			font-weight: bold;
			padding: 0.1em 0em;
		}

		header .container .col-md-7 p {
			padding: 1vmin 5vmin;
		}

		header .container .col-md-7 button {
			border-radius: 30px;
			font-weight: bold;
		}
		main a{
			font-family: var(--Alegreya-font);
			font-weight: bold;
			color: #343a40;
			text-align: right;
		}
		table .edit {
			width: 10%;
		}
		table .exclude {
			width: 10%;
		}
		table{
			padding-top: 1px;
			text-align: center;
		}

		footer {
			background: rgba(0, 0, 0, 0.815);
			overflow-x: hidden;
			padding: 1px;
			position: absolute;
   			bottom:0;
			width: 100%;
			height: 16%;

		}

		footer p>span {
			color: rgb(52, 52, 253);
		}
		.text-muted{
			padding-bottom: 0.5px !important;
		}
		.pt-4, .text-muted {
			padding-top: 0px !important;
			padding-bottom: 0.5px !important;
		}
 </style>
    </body>
</html>