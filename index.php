<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grécia</title>   
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body id="azul">

<?php include 'header.php'; ?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/slider/atenas.jpg" alt="Primeiro slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Atenas</h5>
        <p>Capital da Grécia</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slider/paternon.jpg" alt="Segundo slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Cultura</h5>
        <p>Partenon</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slider/arte.jpg" alt="Terceiro slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Arte</h5>
        <p>A queda dos gigantes</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slider/culinaria.png" alt="Quarto slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Culinária</h5>
        <p>Moussaka de berinjela</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slider/selecaogrega.jpg" alt="Quinto slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Futebol</h5>
        <p>Seleção Grega de futebol</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>

<br>

<h3> Explore o berço da civilização ocidental - a Grécia! Deixe-se envolver pela rica história, pelos maravilhosos cenários naturais e pela cultura vibrante que cativou mentes e corações por milênios.
    Venha conhecer os sabores e as tradições que tornam a Grécia uma jornada imperdível para todos os viajantes em busca de experiências autênticas e inesquecíveis.
</h3>

<?php include 'footer.php'; ?>

