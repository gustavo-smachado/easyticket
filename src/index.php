<?php
    session_start(); 
    error_reporting(false);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyTicket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
    <header>
        
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                <a class="navbar-brand" href="src/index.php">
                    <img src="../assets/ticket.png" alt="tickets" class="ticket"> 
                    EasyTicket</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>                        

                      <?php
                        if($_SESSION["permissao"] == 1) { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="../dashboard.php">Dashboard</a>
                            </li>    
                            <li class="nav-item">
                                <a class="nav-link" href="../register_admin.php">Cadastrar administrador</a>
                            </li>   
                            <li class="nav-item">
                                <a class="nav-link" href="../logout.php"> Sair </a>
                            </li>                   
                      <?php	} else if($_SESSION["permissao"] == 2) { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="../compras_list.php">Compras</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../evento_list.php">Catálogo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../logout.php"> Sair </a>
                            </li> 
                        <?php } else { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="../login_page.php">Login</a>
                            </li>
                        <?php } ?>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>

        <div class="container text-center">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <h6>DIRECTOR: JON WATTS</h6>
                    <h1>HOMEM-ARANHA: SEM VOLTA PARA CASA</h1>
                    <p>
                            Um dos filmes mais aguardados deste ano, 
                            já está chegando às telonas. Nesta nova aventura, Peter Parker (Tom Holland) 
                            precisa resolver os problemas que passou a enfrentar em Homem-Aranha: Longe de Casa (2019), 
                            depois que Mysterio (Jake Gyllenhaal) foi o responsável por revelar a identidade secreta do super-herói.
                    </p>
                    <?php
                        if($_SESSION["permissao"] == 2) { ?>
                            <a href="../evento_list.php"> <button class="btn btn-light px-5 py-2">Compre Seu Ingresso</button> </a>                  
                    <?php } ?>                   
                </div>
            <div class="col-md-5 col-sm-12 h-25">
                <img src="../assets/MIRANHA.jpg" alt="miranha">
            </div>

        </div>
    </div>

    </header>
    <main> 
        <section class="section-1">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-6">
                        <div class="pray">
                            <img src="../assets/BOOM.jpg" alt="nightmarebeforechristmas">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel text-left">
                            <h1>Tick, Tick...BOOM!</h1>
                            <p class="pt-4">
                            Em Tick, Tick…Boom!, Jon (Andrew Garfield) é um jovem compositor que trabalha como 
                            garçom em Nova York, enquanto sonha em escrever um grande musical americano que vai 
                            o levar ao estrelato. Quando seu colega de quarto aceita um emprego corporativo e está 
                            prestes a se mudar, próximo ao seu aniversário de 30 anos, Jon é tomado pela ansiedade 
                            de que seu sonho é irreal e não vale a pena continuar lutando.
                            </p>
                            <p>
                            Até aqueles não apaixonados pelo mundo musical conhecem Rent. Ou, pelo menos, a canção 
                            "Seasons of Love" que até chegou a ganhar paródia em The Office. O responsável por tal 
                            obra revolucionária foi Jonathan Larson, compositor que faleceu antes mesmo de ver sua 
                            grande obra nos palcos da Broadway. Mas antes disso, ele escreveu Tick, Tick... Boom!, 
                            uma espécie de peça autobiográfica sobre os dilemas de ser artista, que acaba tocando em 
                            outras questões filosóficas. Logo, para falar disso, surge um outro artista que também 
                            revolucionou a Broadway: Lin-Manuel Miranda
                            </p>                          
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-2 container-fluid p-0">
            <div class="cover">
                <div class="content text-center">
                    <h1>Nossos Eventos</h1>
                    <p>
                        A seguir algumas de nossas datas. 
                    </p>
                </div>
            </div>
            <div class="container-fluid text-center">
                <div class="numbers d-flex flex-md-row justify-container-center flex-wrap">
                    <div class="rect">
                        <h1>15/12</h1>
                        <p>Homem-Aranha: Sem Volta Para Casa</p>
                    </div>
                    <div class="rect">
                        <h1>02/12</h1>
                        <p>Encanto</p>
                    </div>
                    <div class="rect">
                        <h1>23/10</h1>
                        <p>Star Wars: Episode III</p>
                    </div>
                    <div class="rect">
                        <h1>24/10</h1>
                        <p>O Estranho Mundo de Jack</p>
                    </div>
                </div>
            </div>

            <div class="purchase text-center">
                <h1>Compre Seu Ingresso</h1>
                <p>compre aqui seu ingresso para um momento de diversão</p>
                <div class="cards">
                    <div class="d-flex flex-row justify-content-center flex-wrap">
                        <!--First Card-->
                        <div class="card">
                            <div class="card-body">
                                <div class="title">
                                    <h5 class="card-title">Encanto</h5>
                                </div>
                                <p class="card-text">Date: 02/12 Hora: 16:30h</p>
                                <div class="prices">
                                    <h1>R$ 10,00</h1>

                                    <?php
                                        if($_SESSION["permissao"] == 2) { ?>
                                            <a href="../evento_list.php" class="btn btn-dark px-5 py-2 mb-5">Compre Agora</a>
                                    <?php } ?>                                    
                                </div>
                            </div>
                        </div>
                        <!--Second Card-->
                        <div class="card">
                            <div class="card-body">
                                <div class="title">
                                    <h5 class="card-title">Spider-Man: No Way Home</h5>
                                </div>
                                <p class="card-text">Date: 15/12 Hora: 21h</p>
                                <div class="prices">
                                    <h1>R$ 15,00</h1>
                                    <?php
                                        if($_SESSION["permissao"] == 2) { ?>
                                            <a href="../evento_list.php" class="btn btn-dark px-5 py-2 mb-5">Compre Agora</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!--Third Card-->
                        <div class="card">
                            <div class="card-body">
                                <div class="title">
                                    <h5 class="card-title">Tick, Tick...Boom!</h5>
                                </div>
                                <p class="card-text">Date: 14/12 Hora: 21:30h</p>
                                <div class="prices">
                                    <h1>R$ 15,00</h1>
                                    <?php
                                        if($_SESSION["permissao"] == 2) { ?>
                                            <a href="../evento_list.php" class="btn btn-dark px-5 py-2 mb-5">Compre Agora</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-4">
            <div class="container text-center">
                <h1 class="text-dark">Confira nosso calendário</h1>
                <p class="text-secondary">
                    Nossos futuros eventos estão aqui!
                </p>
            </div>
            <div class="team row">
                <div class="col-md-4 col-12 text-center">
                    <div class="card mr-2 d-inline-block shadow-lg">
                        <div class="card-img-top">
                            <img src="../assets/encanto.jpg" alt="howl" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Encanto</h3>
                            <p class="card-text">
                            Encanto, da Walt Disney, conta a história dos Madrigal, 
                            uma família extraordinária que vive escondida nas montanhas da Colômbia, 
                            em um lugar maravilhoso conhecido 
                            como um Encanto. A magia deste Encanto abençoou todos os meninos e meninas da 
                            família com um dom único. Todos, exceto 
                            Mirabel. Mas, quando ela descobre que a magia que cerca o Encanto está em perigo, 
                            decide que ela pode ser a última 
                            esperança de sua família excepcional.
                            </p>

                            <?php
                                if($_SESSION["permissao"] == 2) { ?>
                                    <a href="../evento_list.php" class="text-secondary text-decoration-none">Compre</a>
                            <?php } ?>                            
                            <p class="text-black-50">Data: 02/12</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <!--Carousel Start-->
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active text-center">
                            <!--Card Two-->
                            <div class="card mr-2 d-inline-block shadow-lg">
                                <div class="card-img-top">
                                    <img src="../assets/MIRANHA.jpg" alt="spiritedaway" class="img-fluid">
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Homem-Aranha: Sem Volta Para Casa</h3>
                                    <p class="card-text">
                                    Em Homem-Aranha: Sem Volta para Casa, Peter Parker (Tom Holland) precisará 
                                    lidar com as consequências da sua identidade como aracnídeo ter sido revelada 
                                    pela reportagem do Clarim Diário. Incapaz de separar sua vida normal das aventuras 
                                    de ser um super-herói, Parker pede ao Doutor Estranho (Benedict Cumberbatch) para 
                                    que todos esqueçam sua verdeira identidade. Entretanto, o feitiço não sai como planejado 
                                    e a situação torna-se ainda mais perigosa, forçando-o a descobrir o que realmente 
                                    significa ser o Homem-Aranha.
                                    </p>
                                    <?php
                                        if($_SESSION["permissao"] == 2) { ?>
                                            <a href="../evento_list.php" class="text-secondary text-decoration-none">Compre</a>
                                    <?php } ?>  
                                    <p class="text-black-50">Data: 15/12</p>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col-md-4 col-12 text-center">
                    <!--Card 4-->
                    <div class="card mr-2 d-inline-block shadow-lg">
                        <div class="card-img-top">
                            <img src="../assets/BOOM.jpg" alt="castleinthesky" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Tick, Tick... Boom!</h3>
                            <p class="card-text">
                            Em Tick, Tick…Boom!, Jon (Andrew Garfield) é um jovem compositor que trabalha 
                            como garçom em Nova York, enquanto sonha em escrever um grande musical americano 
                            que vai o levar ao estrelato. Quando seu colega de quarto aceita um emprego 
                            corporativo e está prestes a se mudar, próximo ao seu aniversário de 30 anos, 
                            Jon é tomado pela ansiedade de que seu sonho é irreal e não vale a pena continuar lutando.
                            </p>
                            <?php
                                if($_SESSION["permissao"] == 2) { ?>
                                    <a href="../evento_list.php" class="text-secondary text-decoration-none">Compre</a>
                            <?php } ?> 
                            <p class="text-black-50">Date: 14/12</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>
</body>
</html>