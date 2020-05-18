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
  <header class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light navbar-transparencia">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="./src/img/logo_bocamaria.png" width="132">
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#id-principal">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="id-principal">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="#products" class="nav-link">Produtos</a></li>
            <li class="nav-item divisor"></li>
            <li class="nav-item"><a href="#about" class="nav-link">Sobre</a></li>
            <li class="nav-item divisor"></li>
            <li class="nav-item"><a href="#" class="nav-link">contato</a></li>
          </ul>
          </div>
      </div>
    </nav>
  </header>

  <main>
    <section id="home">
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
    
  </section>
    <section id="products" class="content-products-center">
      <div class="container">
        <div class="row">
          <div class="col align-self-start">
            <picture>
              <img src="./src/img/produtos/img_batom_vermelho.jpg" style="width: 350px; height: 350px;" class="img-fluid rounded mx-auto d-block" alt="">
            </picture>  
          </div>
          <div class="col-sm align-self-center">
            <p class="text-center"><strong>Não existe pele perfeita...</strong><br>Agora existe! <br>Conheça o novo 
            corretivo facial que a <i>Bocamaria</i> desenvolveu pra você, elaborado com óleo de calêndula e alecrim
            uniformiza o tom da pele suavizando linhas de expressão.
           <br><strong>Nada melhor que uma pele perfeita para destacar os olhos, boca e auto estima.</strong></p>
          </div>
        </div>
        <div class="row"> 
          <div class="col-sm align-self-center">
            <p class="text-center">Cada estação do ano pede um cuidado especial para nossa pele.
            Preocupada com isso a <i>Bocamaria</i> desenvolveu hidratantes enriquecidos com manteiga de buriti que 
            embelezam e tratam seus lábios o ano todo... 
            <strong>Tenha lábios aveludados nos 365 dias do ano.</strong></p>
          </div>
          <div class="col align-self-end">
            <picture>
              <img src="./src/img/produtos/batom_liquido_nude.jpg" style="width: 350px; height: 350px;" class="img-fluid rounded mx-auto d-block" alt="">
            </picture>
          </div>
        </div>
        <div class="row">
          <div class="col align-self-start">
            <picture>
              <img src="./src/img/produtos/img_batom_vermelho.jpg" style="width: 350px; height: 350px;" class="img-fluid rounded mx-auto d-block" alt="">
            </picture>  
          </div>
          <div class="col-sm align-self-center">
            <p class="text-center"><strong>Não existe pele perfeita...</strong><br>Agora existe! <br>Conheça o novo 
            corretivo facial que a <i>Bocamaria</i> desenvolveu pra você, elaborado com óleo de calêndula e alecrim
            uniformiza o tom da pele suavizando linhas de expressão.
           <br><strong>Nada melhor que uma pele perfeita para destacar os olhos, boca e auto estima.</strong></p>
          </div>
        </div>
        <div class="row"> 
          <div class="col-sm align-self-center">
            <p class="text-center">Cada estação do ano pede um cuidado especial para nossa pele.
            Preocupada com isso a <i>Bocamaria</i> desenvolveu hidratantes enriquecidos com manteiga de buriti que 
            embelezam e tratam seus lábios o ano todo... 
            <strong>Tenha lábios aveludados nos 365 dias do ano.</strong></p>
          </div>
          <div class="col align-self-end">
            <picture>
              <img src="./src/img/produtos/batom_liquido_nude.jpg" style="width: 350px; height: 350px;" class="img-fluid rounded mx-auto d-block" alt="">
            </picture>
          </div>
        </div>
      </div>
    </section>
    <section id="about" class="content-about-center about-background">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-2">
            <h1 class="text-center">Sobre</h1>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-9">
            <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
        </div>
      </div>
    </section>
    <section> <!--formulário para divulgar produtos-->
      <div class="container" style="margin-top: 100px;">
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