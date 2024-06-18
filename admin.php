<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true || $_SESSION['user_role'] !== 'admin') {
    header("Location: index.php");
    exit;
}
?>
<?php include 'header.php'; ?>

<div class="container">
  <h1>Painel Administrativo</h1>
  <p>Bem-vindo, Admin. Aqui você pode gerenciar o site.</p>
  <!-- Conteúdo do painel administrativo -->
</div>

<footer class="footer mt-auto py-3 custom-bg-color">
  <div class="container">
    <span class="text-muted custom-text-color">&copy; Projeto Volta ao Mundo - Grécia</span> <br>
    <span class="text-muted custom-text-color">Desenvolvido por Rodrigo Rodrigues</span>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
