<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$logoutButton = '';
$adminButton = '';
$loginButton = '';
$registerButton = '';

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    $logoutButton = '<a class="nav-link" href="logout.php">Logout</a>';
    if ($_SESSION['role'] === 'admin') {
        $adminButton = '<a class="nav-link" href="admin.php">Painel Administrativo</a>';
    }
} else {
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
        <a class="nav-link" href="pagCult.html">Cultura</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pagArt.html">Arte</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pagCl.html">Culinária</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pagFut.html">Futebol</a>
      </li>
      <?php
      if (!empty($logoutButton)) {
          echo '<li class="nav-item">' . $logoutButton . '</li>';
      }
      if (!empty($adminButton)) {
          echo '<li class="nav-item">' . $adminButton . '</li>';
      }
      if (!empty($loginButton)) {
          echo '<li class="nav-item">' . $loginButton . '</li>';
      }
      if (!empty($registerButton)) {
          echo '<li class="nav-item">' . $registerButton . '</li>';
      }
      ?>
    </ul>
  </div>
</nav>
