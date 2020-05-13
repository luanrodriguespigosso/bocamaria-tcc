<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bocamaria</title>

  <link rel="icon" href="src/img/icon2.png">
  <!--import bootstrap4-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!--import fontawesome-->
  <script src="https://kit.fontawesome.com/5772977e9f.js" crossorigin="anonymous"></script>
  <!--import pag style-->
  <link rel="stylesheet" href="src/css/style.css">

  <!--<script src="./src/js/index.js"></script>-->
</head>

<body>
  <header class="fixed-top"><!--inicio do cabecalho-->
    <nav class="navbar navbar-expand-lg navbar-light navbar-transparencia">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
          <img src="./src/img/logo_bocamaria.png" width="132">
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#id-principal">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="id-principal">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="gloss.html" class="nav-link">Produtos</a></li>
            <li class="nav-item divisor"></li>
            <li class="nav-item"><a href="sobre.html" class="nav-link">Sobre</a></li>
            <li class="nav-item divisor"></li>
            <li class="nav-item"><a href="#" class="nav-link">contato</a></li>
          </ul>
          </div>
      </div>
    </nav>
  </header><!--fim do cabecalho-->

  <main>
    <div id="demo" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img id="img-size" src="./src/img/carousel/carousel1.png" alt="">
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
    <div class="container-fluid"><!--banner promoção-->
      <figure class="banner-rule">
        <img class="img-fluid" src="./src/img/banner/banner-regua-site.webp" alt="">
      </figure>
    </div> <!--banner promoção-->
    <section> <!--formulário para divulgar produtos-->
      <div class="container">
        <div class="row text-danger">
          <div class="col-md-12 align-center">
            <h2>Gostaria de conhecer nossos produtos?</h2>
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
          <button type="submit" class="btn btn-danger">Enviar</button>
        </form>
      </div>
    </section>
  </main>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>