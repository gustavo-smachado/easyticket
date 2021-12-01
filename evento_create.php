<?php
    session_start(); 
    error_reporting(false);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
        <title>EasyTicket</title>
		<meta charset="UTF-8">
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
                                <a class="nav-link" href="dashboard.php">Dashboard</a>
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
	</header>
	<div class="container-fluid text-center">
			<div class="numbers d-flex flex-md-row justify-container-center flex-wrap">
				<div class="rect">
					<form enctype="multipart/form-data" action="evento_create_db.php" method="post">
						<label for="nome">Nome</label><br>
						<input type="text" name="nome" id="nome" maxlength="50"><br><br>
					
						<label for="descricao">Descrição</label><br>			
						<textarea name="descricao" id="descricao"></textarea><br><br>
					
						<label for="data">Data</label><br>
						<input type="datetime-local" name="data" id="data"><br><br>

						<label for="endereco">Endereço</label><br>
						<input type="text" name="endereco" id="endereco"><br><br>

						<label for="qtde_ingressos">Quantidade de ingressos disponíveis</label><br>
						<input type="number" name="qtde_ingressos" id="qtde_ingressos" maxlength="10"><br><br>

						<label for="valor_ingresso">Valor do ingresso</label><br>
						<input type="text" name="valor_ingresso" id="valor_ingresso" maxlength="10"><br><br>	
						
						<label for="tipo">Tipo</label><br>
						<select name="tipo" id="tipo">
							<option value="Filme">Filme</option>
							<option value="Teatro">Teatro</option>
							<option value="Outros">Outros</option>
						</select><br><br>

						<button type="submit">Cadastrar evento</button>
					</form>
					</div>
			</div>
		</div>
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
			display: inline-block;
			margin-bottom: 10px;
		}
		form button {
 		    border-radius: 30px;
			color: #495057 ;
		}
		input, textarea, select{
			border-radius: 10px;
			float: center;
		}

		textarea{
			height: 35px;
			width: 20rem;
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
			height: 38rem;
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





		.register{
			background: #39595c;
			margin-top: 2.5%;
			padding: 0%;
			border-radius: 1em;
		}
		.register-left{
			text-align: center;
			color: #fff;
			margin-top: 4%;
		}

		.register-right{
			background: #f8f9fa;
			border-top-left-radius: 10% 50%;
			border-bottom-left-radius: 10% 50%;
		}
		@-webkit-keyframes mover {
			0% { transform: translateY(0); }
			100% { transform: translateY(-20px); }
		}
		@keyframes mover {
			0% { transform: translateY(0); }
			100% { transform: translateY(-20px); }
		}
		.register-left p{
			font-weight: lighter;
			padding: 12%;
			margin-top: -9%;
		}
		.register .register-form{
			padding: 15%;
			border-radius: 10px;
			margin-top: 10%;
		}
		.btnRegister{
			float: right;
			margin-top: 10%;
			border: none;
			border-radius: 1.5rem;
			padding: 2%;
			background: #39595c;
			color: #fff;
			font-weight: 600;
			width: 50%;
			cursor: pointer;
		}
		.register .nav-tabs{
			margin-top: 3%;
			border: none;
			background: #fff;
			border-radius: 1.5rem;
			width: 28%;
			float: right;
		}
		.register .nav-tabs .nav-link{
			padding: 2%;
			height: 34px;
			font-weight: 600;
			color: #fff;
			border-top-right-radius: 1.5rem;
			border-bottom-right-radius: 1.5rem;
		}
		.register .nav-tabs .nav-link:hover{
			border: none;
		}
		.register .nav-tabs .nav-link.active{
			width: 100px;
			color: #b1aeaf;
			border: 2px solid #b1aeaf;
			border-top-left-radius: 1.5rem;
			border-bottom-left-radius: 1.5rem;
		}
		.register-heading{
			text-align: center;
			margin-top: 8%;
			margin-bottom: -15%;
			color: #495057;
		}
 </style>
	</body>
</html>