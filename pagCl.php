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

<p>Culinária</p>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3>A comida grega é o que se chama de ‘mediterrânea’. Uma culinária conhecida no mundo todo por ser muito saudável. Pense em azeite de oliva, peixe, cordeiro, queijo feta, azeitonas, iogurte, hortelã e etc...
        Mesmo sem querer, numa viagem pela Grécia é capaz de você se alimentar bem melhor do que em casa!</h3>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <img src="img/culinaria/salada.png" class="img-fluid img-with-border" alt="Imagem">
    </div>
    <div class="col-md-6">
      <img src="img/culinaria/iogurte.png" class="img-fluid img-with-border" alt="Imagem">
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <img src="img/culinaria/churrasquinho.png" class="img-fluid img-with-border" alt="Imagem">
    </div>
    <div class="col-md-6">
      <img src="img/culinaria/streetfood.png" class="img-fluid img-with-border" alt="Imagem">
    </div>
  </div>
<br>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <img src="img/culinaria/moussaka.png" class="img-fluid img-with-border" alt="Imagem">
    </div>
    <div class="col-md-6">
      <img src="img/culinaria/dolmades.png" class="img-fluid img-with-border" alt="Imagem">
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <img src="img/culinaria/tortamassafina.png" class="img-fluid img-with-border" alt="Imagem">
    </div>
    <div class="col-md-6">
      <img src="img/culinaria/peixefrito.png" class="img-fluid img-with-border" alt="Imagem">
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
