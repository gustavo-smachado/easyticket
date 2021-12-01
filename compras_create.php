<?php
    session_start(); 
	include('connection.php');
    $id = $_GET['id'];
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
    <form class="form" autocomplete="off" novalidate action="compras_create_db.php?id=<?php echo $id; ?>" method="post">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-12">
                    <div class="card mx-auto">
                        <p class="heading">PAYMENT DETAILS</p>
                        <form class="card-details ">
                            <div class="form-group mb-0">
                                <p class="text-warning mb-0">Card Number</p> <input type="text" name="card-num" placeholder="1234 5678 9012 3457" size="17" id="cno" minlength="19" maxlength="19"> <img src="https://img.icons8.com/color/48/000000/visa.png" width="64px" height="60px" />
                            </div>
                            <div class="form-group">
                                <p class="text-warning mb-0">Cardholder's Name</p> <input type="text" name="name" placeholder="Name" size="17">
                            </div>
                            <div class="form-group pt-2">
                                <div class="row d-flex">
                                    <div class="col-sm-4">
                                        <p class="text-warning mb-0">Expiration</p> <input type="text" name="exp" placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7">
                                    </div>
                                    <div class="col-sm-3">
                                        <p class="text-warning mb-0">Cvv</p> <input type="password" name="cvv" placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3">
                                    </div>
                                    <div class="col-sm-5 pt-0"> <button type="submit" class="btn btn-primary"><a>concluir</a></button> </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>

	  <style>
		@import url('https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,300;0,700;1,300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

        body {
            font-family: 'Roboto', sans-serif
        }
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

        .card {
            border: 1px solid;
            max-width: 450px;
            border-radius: 15px;
            margin: 150px 0 150px;
            padding: 35px;
            padding-bottom: 20px !important
        }

        .heading {
            color: #C1C1C1;
            font-size: 14px;
            font-weight: 500
        }

        img {
            transform: translate(160px, -10px)
        }

        img:hover {
            cursor: pointer
        }

        .text-warning {
            font-size: 12px;
            font-weight: 500;
            color: #b1aeaf !important
        }

        #cno {
            transform: translateY(-10px)
        }

        input {
            border-bottom: 1.5px solid #E8E5D2 !important;
            font-weight: bold;
            border-radius: 0;
            border: 0
        }

        .form-group input:focus {
            border: 0;
            outline: 0
        }

        .col-sm-5 {
            padding-left: 90px
        }

        .btn {
            background: #F3A002 !important;
            border: none;
            border-radius: 30px
        }
        .btn:focus {
            box-shadow: none
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