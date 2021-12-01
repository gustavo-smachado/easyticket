<!DOCTYPE html>
<html lang="pt-br">
	<head>
        <meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=chrome">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Easy Ticket - Cadastrar usuários</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	</head>
	<body>
		<?php
			$erro = @$_GET['erro'];
			$msg  = @$_GET['msg'];
			if ($erro == 2) {
				echo "<p class=\"erro\">Erro: {$msg}</p>";
			}
		?>

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
                      <li class="nav-item">
                        <a class="nav-link" href="login_page.php">Login</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>

    </header>
	
	<main>
		<div class="container-fluid text-center">
			<div class="numbers d-flex flex-md-row justify-container-center flex-wrap">
				<div class="rect">
					<form action="register_db.php" method="post">
						<label for="nome">Nome</label><br>
						<input type="text" name="nome" id="nome" maxlength="150" placeholder="Nome"><br><br>

						<label for="login">Login</label><br>
						<input type="text" name="login" id="login" maxlength="50" placeholder="Login"><br><br>
						
						<label for="nascimento">Data de nascimento</label><br>
						<input type="date" name="nascimento" id="nascimento" required placeholder="Data de Nascimento"><br><br>

						<label for="cpf">CPF</label><br>
						<input type="text" name="cpf" id="cpf" maxlength="11" placeholder="CPF"><br><br>

						<label for="email">E-mail</label><br>
						<input type="text" name="email" id="email" maxlength="100" placeholder="E-mail"><br><br>

						<label for="senha">Senha</label><br>
						<input type="password" name="senha" id="senha" maxlength="50" placeholder="Senha"><br><br>

						<label for="confirmar">Confirmar senha</label><br>
						<input type="password" name="confirmar" id="confirmar" maxlength="50" placeholder="Confirme sua senha"><br><br>										

						<button type="submit">Cadastrar</button>
						<a href="login_page.php" id="register">Entrar<a>
					</form>

				</div>
			</div>
		</div>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
	</main>
	<footer>
        <div class="container-fluid p-0">
            <div class="row text-center">
                <div class="col-md-4 col-md-12">
                    <h1 class="text-light">About Us</h1>
                    <p class="text-muted">Blablabla events.</p>
                    <div class="pt-4 text-muted">Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
                    <p class="pt-4 text-muted">Copyright ©2021 All rights reserved | This template is made by <span>EasyTicket</span> company.</p>
                </div>
            </div>
        </div>
    </footer>

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
		form{
			text-align: center;
			padding: 1vmin 4vmin;
			display: inline-block;
		}
		form button {
 		    border-radius: 30px;
			color: #495057 ;
		}
		input{
			border-radius: 10px;
			float: left;
			display: inline-block;
		}
		main a{
			font-family: var(--Alegreya-font);
			font-weight: bold;
			color: #343a40;
			text-align: center;
		}
		label{
			font-family: var(--Alegreya-font);
			font-weight: bold;
		}

		.rect {
			position: absolute;
			top: 8%;
			bottom: 70%;
			left: 39%;
			z-index: 1;
			background: var(--bs-gray-500);
			width: 24rem;
			height: 37.5rem;
			padding-top: 1vmin;
			padding-bottom: 1vmin;
			margin: 1rem;
			border-radius: .5em;
			box-shadow: 1px 2px 10px 0px rgba(0, 0, 0, 0.349)
		}



		footer {
			background: rgba(0, 0, 0, 0.815);
			overflow-x: hidden;
			padding: 1px;
			position: absolute;
   			bottom:0;
			width: 100%;
			height: 23%;

		}

		footer p>span {
			color: rgb(52, 52, 253);
		}
 </style>
	</body>
</html>