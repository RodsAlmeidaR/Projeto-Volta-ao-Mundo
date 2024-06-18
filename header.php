<?php
// Inicia a sessão se ainda não estiver iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Lógica para mostrar os botões de login, registro, logout e dashboard dinamicamente
$loginButton = '<a class="nav-link" href="login.php">Login</a>';
$registerButton = '<a class="nav-link" href="register.php">Registro</a>';
$logoutButton = '';
$dashboardButton = '';

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    $logoutButton = '<a class="nav-link" href="logout.php">Logout</a>';
    
    // Verifica se é administrador
    if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin') {
        $dashboardButton = '<a class="nav-link" href="admin.php">Dashboard</a>';
    }
} else {
    // Usuário não logado, mostrar botão de login e registro
    $loginButton = '<a class="nav-link" href="login.php">Login</a>';
    $registerButton = '<a class="nav-link" href="register.php">Registro</a>';
}

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

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #266980 !important;">
  <img src="img/bandeira.jpg" alt="bandeira" style="width: 30px; margin-right: 10px;">
  <a class="navbar-brand" href="index.php">Grécia</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="pagCult.php">Cultura</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pagArt.php">Arte</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pagCl.php">Culinária</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pagFut.php">Futebol</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="comentarios.php">Comentários</a>
      </li>
      <?php
      if (!empty($dashboardButton)) {
          echo '<li class="nav-item">' . $dashboardButton . '</li>';
      }
      if (!empty($logoutButton)) {
        echo '<li class="nav-item">' . $logoutButton . '</li>';
    }
      if (empty($_SESSION['loggedin'])) {
          echo '<li class="nav-item">' . $loginButton . '</li>';
          echo '<li class="nav-item">' . $registerButton . '</li>';
      }
      ?>
    </ul>
  </div>
</nav>

<br>
