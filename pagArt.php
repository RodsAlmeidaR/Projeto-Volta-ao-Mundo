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
<body style="background-color: white;">

<?php include 'header.php'; ?>

<br>

<div class="container">
  <div class="row">
      <div class="col-md-12">
          <p>Arte</p>
          <h3>
            A arte grega abarca todas as manifestações artísticas e revela a história, a estética e mesmo a filosofia desta civilização.
            O povo grego foi na antiguidade um dos que exibiam manifestações culturais mais livres, rendendo-se pouco às ordens de reis e sacerdotes, pois acreditavam que o ser humano era a concepção mais incrível do universo.            
            A arte grega passou pelos períodos arcaico, clássico e helenístico, e cada uma dessas fases históricas, influenciou a elaboração das obras.           
          </h3>
      </div>
  </div>
</div>

<br>

<div class="container">
  <div class="row">     
    <div class="col-md-12">
      <p>Pinturas</p>
          <h3>
            A arte da pintura era desenvolvida em cerâmicas, bem como nas paredes das grandes construções. Os vasos nem sempre foram peças de decoração, sendo utilizados no trabalho diário ou para guardar mantimentos, tais como vinho e azeite.
            As pinturas mostravam harmonia e rigor nos detalhes. No que respeita às cores, seguia-se o seguinte padrão: figuras negras sobre fundo vermelho ou figuras vermelhas e douradas sobre fundo negro ou fundo branco.
            Os principais pintores foram: Clítias, Exéquias e Sófilos.
          </h3>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <img src="img/artes/pintura.png" class="img-fluid img-with-border" alt="Imagem"> 
    </div>
    <div class="col-md-4">
      <img src="img/artes/pintura3.png" class="img-fluid img-with-border" alt="Imagem"> 
    </div>
    <div class="col-md-4">
      <img src="img/artes/pintura2.png" class="img-fluid img-with-border" alt="Imagem"> 
    </div>
  </div>
</div>

<br><br>

<p>Música</p>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h3>Na Grécia Antiga havia dois gêneros musicais. O gênero vocal e o instrumental. Esse segundo gênero fazia uso, principalmente, dos seguintes instrumentos: cítara, lira, salpinge (tipo de trombeta), siringe (flauta) e aulo (instrumento de sopro).
        <br>
        Sobre a música ao lado: Isto é baseado no "Hino Órfico a Dionísio" do século II d.C.
        As letras são as palavras do texto original em grego com uma tradução para o inglês de Andonis Theodoros.       
        Daemonia Nymphe deu vida a essas palavras da maneira mais poderosa que se possa imaginar.      
      </h3>
    </div>
    <div class="col-md-6">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/TD5zbXREo4w?si=pg4SyzYJYiATziID" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
  </div>
</div>

<br><br>

<p>Literatura</p>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3>No campo da Literatura, podemos destacar as fábulas escritas por Esopo, os poemas épicos de Homero (autor de Ilíada e Odisseia), e as obras do poeta e historiador grego Hesíodo (autor de Os Trabalhos e os Dias e Teogonia).</h3>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <img src="img/artes/Esopo.jpg" class="img-fluid img-with-border" alt="Imagem">
    </div>
  </div>
</div>

<br>

<?php include 'footer.php'; ?>
  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
