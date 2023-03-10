<!DOCTYPE HTML>
<html lang="pt-br">
<link rel="stylesheet" type="text/css" href="/css/style.css" />

@vite(['resources/css/app.css',
'resources/js/app.js',
'node_modules/bootstrap/dist/css/bootstrap.min.css',
'node_modules/bootstrap/dist/js/bootstrap.bundle.js'])

<head>
    <style> 
    .body{ 
      background-color:azure;
        }
  </style>
  <meta charset="UTF-8">
  <title>PRJ-Layout</title>

</head>

<body class="body">

  <nav class="navbar" style="background-color:	#98FB98;">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <img src="/img/imgicon.png" class="navbar-brand" alt="..." height="90px">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Dicas</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Praias
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Baía dos Porcos</a></li>
                <li><a class="dropdown-item" href="#">Praia do Cachorro</a></li>
                <li><a class="dropdown-item" href="#">Praia do Porto</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://pt-br.facebook.com/" target="_blank">Nosso Facebook</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Digite Aqui" aria-label="search">
            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
          </form>
        </div>
      </div>
    </nav>
  </nav>












  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/img01.jpg" class="d-block w-100" alt="..." height="600px">
        <div class="carousel-caption d-none d-md-block">
          <h5>Baía dos Porcos</h5>
          <p>A melhor praia de Fernando de Noronha</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/img02.jpg" class="d-block w-100" alt="..." height="600px">
        <div class="carousel-caption d-none d-md-block">
          <h5>Baía dos Porcos</h5>
          <p>A melhor praia de Fernando de Noronha</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/img03.webp" class="d-block w-100" alt="..." height="600px">
        <div class="carousel-caption d-none d-md-block">
          <h5>Baía dos Porcos</h5>
          <p>A melhor praia de Fernando de Noronha</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>





  <hr size="30px" color="Lime">









  <div class="container text-center">
    <div class="row align-items-start">
      <div class="col">
        <p class="fs-2" class="lh-base">Praia do Cachorro</p>
        <p class="fs-5" class="lh-base">
          Entre abril e início de outubro, a Praia do Cachorro funciona como prainha da Vila dos Remédios. Tem barracas simplesinhas,
          com mesas e cadeiras de plástico, que servem tanto a moradores quanto a turistas.

        </p><br>
      </div>
      <div class="col">
        <p class="fs-2" class="lh-base">Praia do Porto</p>
        <p class="fs-5" class="lh-base">
          A Praia do Porto é a mais pitoresca de Noronha, por causa do píer e das embarcações que ficam ancoradas.
          A natureza, porém, também comparece.

        </p><br>
      </div>
      <div class="col">
        <p class="fs-2" class="lh-base">Praia da Conceição</p>
        <p class="fs-5" class="lh-base">
          As praias dentro do parque nacional (Praia do Sancho, do Sueste, do Leão e da Atalaia) requerem a compra
          do ingresso para o parque e não oferecem (nem permitem) espreguiçadeira ou guarda-sol.

        </p><br>
      </div>
    </div>
  </div>

  <div class="container text-center">
    <div class="row align-items-start">
      <div class="col">
        <img src="/img/img 03.png" class="card-img-top" alt="...">

      </div>
      <div class="col">
        <img src="/img/img 02.png" class="card-img-top" alt="...">
      </div>
      <div class="col">
        <img src="/img/img 01.png" class="card-img-top" alt="...">
      </div>

    </div>
  </div>



  <hr size="30px" color="Lime">
  <br><br>

  <div class="container text-center">
    <div class="clearfix">
      <img src="/img/img07.webp" class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">
      <left>
        <p class="fs-5" class="lh-base">As praias em Fernando de Noronha são lindas de olhar e perfeitas para, dependendo da época, mergulhar ou surfar.
        <p>

        <p class="fs-5" class="lh-base">Os dias de praia em Noronha rendem mais do que na costa leste do Nordeste. Aqui o sol nasce e se põe na hora certa
          dos trópicos (alvorada em torno das 6h, pôr do sol lá pelas 18h). Por isso, as praias do Mar de Dentro (voltadas para o poente) têm luz até o
          fim da tarde. Ou seja: nenhuma praia acaba mais cedo por conta de sombra de morro ou coqueiro (ou prédio…).</p>

        <p class="fs-5" class="lh-base">Graças a esse expediente 100% aproveitável do sol, é possível seus passeios em dois turnos, interrompendo seu dia
          para almoçar e dar uma descansadinha entre uma praia e outra.</p>
      </left>
    </div>
  </div>

  <br><br>


  <div class="container text-left">
    <div class="row">
      <div class="col align-self-start">
        <div class="card" style="width: 18rem;">
          <img src="/img/img04.jpeg" class="card-img-top" alt="..." height="200px">
          <div class="card-body">
            <h5 class="card-title">Dicas de Roupas</h5>
            <p class="card-text">Veja dicas de roupas para você usar na praia!</p>
            <a href="#" class="btn btn-outline-success">Ver Mais</a>
          </div>
        </div>
      </div>
      <div class="col align-self-center">
        <div class="card" style="width: 18rem;">
          <img src="/img/img05.jpg" class="card-img-top" alt="..." height="200px">
          <div class="card-body">
            <h5 class="card-title">Dicas de Recursos</h5>
            <p class="card-text">Veja dicas do que podem te ajudar quando você estiver na praia!</p>
            <a href="#" class="btn btn-outline-success">Ver Mais</a>
          </div>
        </div>
      </div>
      <div class="col align-self-end">
        <div class="card" style="width: 18rem;">
          <img src="/img/img06.jpg" class="card-img-top" alt="..." height="200px">
          <div class="card-body">
            <h5 class="card-title">Dicas para a Família</h5>
            <p class="card-text">Divirta-se com a sua família usando essas 10 dicas valiosas!</p>
            <a href="#" class="btn btn-outline-success">Ver Mais</a>
          </div>
        </div>
      </div>

      <div class="col align-self-end">
        <div class="card" style="width: 18rem;">
          <img src="/img/img08.jpg" class="card-img-top" alt="..." height="200px">
          <div class="card-body">
            <h5 class="card-title">Dicas de Praias</h5>
            <p class="card-text">Confira as melhores praias secretas do Brasil!</p>
            <a href="#" class="btn btn-outline-success">Ver Mais</a>
          </div>
        </div>
      </div>

    </div>
  </div>
  <br><br>

  <hr size="30px" color="Lime">


  <div class="container text-center">
    <div class="row align-items-start">
      <div class="col">
        <p class="fs-6">Copyright Praias © 2023 | Desenvolvido por Ana Batista</p>
      </div>
      <div class="col">

      </div>
      <div class="col">

      </div>
    </div>
  </div>