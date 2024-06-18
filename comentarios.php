<?php
session_start();
include 'db_connect.php';

// Verifica se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Adiciona um novo comentário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comentario = $_POST['comentario'];
    $userId = $_SESSION['user_id'];
    
    // Proteção contra SQL Injection
    $comentario = mysqli_real_escape_string($conn, $comentario);

    $sql = "INSERT INTO comentarios (user_id, comentario, aprovado) VALUES ('$userId', '$comentario', 0)";
    
    if (mysqli_query($conn, $sql)) {
        $success = "Comentário enviado com sucesso! Aguarde aprovação.";
    } else {
        $error = "Erro ao enviar comentário: " . mysqli_error($conn);
    }
}

$sql = "SELECT c.comentario, c.data, u.username 
        FROM comentarios c 
        JOIN users u ON c.user_id = u.id 
        WHERE c.status = 'aprovado' 
        ORDER BY c.data DESC";

// Executar a consulta SQL
$result = mysqli_query($conn, $sql);

if (!$result) {
    $errorMessage = "Erro na consulta: " . mysqli_error($conn);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentários Aprovados - Grécia</title>   
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body id="azul">

<?php include 'header.php'; ?>

<div class="container mt-5">
    <h2>Comentários</h2>
    <?php if (!empty($errorMessage)): ?>
        <div class="alert alert-danger"><?php echo $errorMessage; ?></div>
    <?php else: ?>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title"><?php echo htmlspecialchars($row['username']); ?></h5>
                    <p class="card-text"><?php echo htmlspecialchars($row['comentario']); ?></p>
                    <p class="card-text"><small class="text-muted">Enviado em: <?php echo htmlspecialchars($row['data']); ?></small></p>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
