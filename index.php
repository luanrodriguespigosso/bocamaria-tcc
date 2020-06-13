<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bocamaria</title>
    <link rel="icon" href="src/img/icon2.png">
    <!--import bootstrap4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!--import fontawesome-->
    <script src="https://kit.fontawesome.com/5772977e9f.js" crossorigin="anonymous"></script>
    <!--import pag style-->
    <link rel="stylesheet" href="src/css/style.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8/dist/sweetalert2.css">
    <script type="module" src="./src/js/index.js"></script>
    
</head>
<body>
    <header><!-- inicio cabeçalho -->
        <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-color">
            <div class="container">
                <a href="index.php" class="navbar-brand">
                    <img src="src/img/logo_bocamaria.png" width="142" alt="imagem logo">
                </a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal"> 
                    <i class="fas fa-bars text-white"></i>
                </button>

                <div class="collapse navbar-collapse" id="nav-principal">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="#" class="nav-link">Produtos</a></li>
                        <li class="nav-item divisor"></li>
                        <li class="nav-item"><a href="#" class="nav-link">Sobre</a></li>
                        <li class="nav-item divisor"></li>
                        <li class="nav-item"><a href="#" class="nav-link">Contato</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header><!-- final cabeçalho -->

    <section id="home d-flex"><!--home-->
        <div class="container align-self-center"><!--container-->
            <div class="row"><!--Row-->
                <div class="col-md-12 capa">
                   <div class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img id="img-size" src="./src/img/carousel/carousel-01.png" alt="">
                          <div class="carousel-caption">
                          </div>   
                        </div>
                        <div class="carousel-item">
                          <img id="img-size" src="./src/img/carousel/carousel2.png" alt="geralt">
                          <div class="carousel-caption">
                          </div>   
                        </div>
                        <div class="carousel-item">
                          <img id="img-size" src="./src/img/carousel/carousel3.png" alt="">
                          <div class="carousel-caption">
                          </div>   
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                      </a>
                      <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                      </a>
                    </div>   
                    <!--<div class="container-fluid">
                      <figure class="banner-rule">
                        <img class="img-fluid" src="./src/img/banner/banner-regua-site.webp" alt="">
                      </figure>
                    </div>banner promoção-->
                    
                   </div>
                </div>
            </div><!--/Row-->
        </div><!--/container-->
    </section><!--/home-->

    <section id="products"><!--products-->
        <div class="container"><!--container-->
            <div class="row"><!--row-->
                <div class="col-md-6"><!--Imagem 1-->
                    <div class="row"><!--row-->
                        <div class="col-md-6">
                            <img src="src/img/produtos/corretivo-facial.png" class="img-fluid d-none d-md-block">
                       </div>
                    </div><!--/row-->
                </div><!--/Imagem 1-->

                <div class="col-md-6"><!--conteudo 1-->
                    <h6><strong>Não existe pele perfeita...</strong></h6><br>
                    <h1>Agora existe!</h1>
                    <p>Conheça o novo corretivo facial que a <img src="src/img/logo_bocamaria.png" width="80"> 
                        desenvolveu pra você, 
                        elaborado com óleo de calêndula e alecrim uniformiza o tom da pele suavizando linhas de 
                        expressão.<br><strong>Nada melhor que uma pele perfeita para destacar os olhos, 
                        boca e auto estima.</strong></p>
                        <a href="#">Saiba mais...</a>
                </div><!--/conteudo 1-->
            </div><!--/row-->

            <div class="row"><!--row-->
                <div class="col-md-6"><!--conteudo 2-->
                    <h6>Cada estação do ano pede um cuidado especial para nossa pele...</h6>
                        <P>Preocupada com isso a <img src="src/img/logo_bocamaria.png" width="80"> desenvolveu hidratantes enriquecidos com manteiga de buriti que 
                        embelezam e tratam seus lábios o ano todo... 
                        <strong>Tenha lábios aveludados nos 365 dias do ano.</strong></p>
                        <a href="#">Saiba mais...</a>
                </div><!--/conteudo 2-->

                <div class="col-md-6"><!--Imagem 2-->
                    <div class="row"><!--row-->
                        <div class="col-md-6">
                            <img src="src/img/produtos/hidratanteLabial.jpg" class="img-fluid d-none d-md-block">
                       </div>
                    </div><!--/row-->
                </div><!--/Imagem 2-->

            </div><!--/row-->
        </div><!--/container-->
    </section><!--/products-->

    <section id="sobre"><!--sobre-->
        <div class="container"><!--container-->
            <div class="row"><!--row-->
                <div class="col-md-12">
                    <h1>Sobre</h1>
                    <p>A   <img src="src/img/logo_bocamaria.png" width="80">   é uma empresa preocupada em respeitar 
                        você e o planeta, pensando nisso optamos por 
                        trabalhar com produtos naturais e certificados, garantindo assim a qualidade dos nossos 
                        produtos e a 
                        satisfação dos consumidores. Nossas embalagens são biodegradáveis pois prezamos 
                        pelo meio ambiente e qualidade de vida.</p>
                </div>
            </div><!--/row-->
        </div><!--/container-->
    </section><!--/sobre-->

    <section id="form"> <!--formulário-->
        <div class="container">
          <div class="row text-danger">
            <div class="col-md-12">
              <h6>Gostaria de conhecer nossos produtos?</h6>
            </div>
          </div>
          <?php 
            if(isset($_SESSION['msg'])) {
              echo $_SESSION['msg'];
              unset($_SESSION['msg']);
            }
          ?>
          <form method="POST" action="salva_msg.php">
            <div class="form-group">
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email">
              <small id="emailHelp" class="form-text text-muted">Não compartilhamos informações nem spam!</small>
            </div>
            <button type="submit" class="btn btn-lg btn-custom hoverable">Enviar</button>
          </form>
        </div>
      </section><!--/formulário-->

    <footer><!---footer-->
        <div class="container"><!--container-->
            <div class="row"><!--row-->
                <div class="col-md-2"><!--Logo-->
                    <img src="src/img/logo_bocamaria.png" width="150" alt="logo Bocamaria">
                </div><!--/logo-->

                <div class="col-md-2"><!--info cabeçalho-->
                    <h4>EMPRESA</h4>
                    <ul class="navbar-nav">
                        <li><a href="#">Produtos</a></li>
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </div><!--/info cabeçalho-->

                <div class="col-md-2"><!--devs-->
                   <h4>DESENVOLVEDORES</h4>
                    <ul class="navbar-nav">
                        <li><a href="#">Maristela Peglo</a></li>
                        <li><a href="#">Luan Rodrigues</a></li>
                        <li><a href="#">Silvano Dias Jr.</a></li>
                    </ul>
                </div><!--devs-->

                <div class="col-md-4"><!--redes sociais-->
                    <ul class="rede-social">
                        <li><a href="#"><i class="fab fa-facebook fa-3x"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram-square fa-3x"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter fa-3x"></i></a></li>
                    </ul>
                </div><!--/redes sociais-->
            </div><!--/row-->
        </div><!--/container-->
    </footer><!--/footer-->

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>