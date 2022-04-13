<?php include "funcao.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  require_once "bootstrap.php" ?>
    <title>Document</title>
</head>
<body>

    <header>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="teste2.php">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Historia <span class="sr-only">(página atual)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Troféus</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="teste2.php">Apoie</a>
                <a class="dropdown-item" href="#">Outra ação</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Algo mais aqui</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Desativado</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
        </div>
        </nav>

    </header>

    <div>
        <?php include "formu.php" ?>
    </div>

    <div class="container">
    <h1>TESTE!!!!!!!</h1>
    <?php mensagem("Maior de todos"); ?>

    <div class="btn-group" role="group" aria-label="Exemplo básico">
        <button type="button" class="btn btn-secondary">Esquerda</button>
        <button type="button" class="btn btn-secondary">Meio</button>
        <button type="button" class="btn btn-secondary">Direita</button>
    </div>


    <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://jpimg.com.br/uploads/2020/10/pele326.181402-1024x850.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="https://amigosdepelotas.com.br/wp-content/uploads/2021/12/5b9a62546be90988a01171738aced282.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="https://amigosdepelotas.com.br/wp-content/uploads/2021/12/5b9a62546be90988a01171738aced282.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>


    <figure class="figure">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/35/Santos_logo.svg/1200px-Santos_logo.svg.png" class="figure-img img-fluid rounded" alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
        <figcaption style="text-align: center;" class="figure-caption">Maior Time de todos!.</figcaption>
    </figure>
    </div>

   <?php require_once "administracao.php" ?>


</body>
</html>