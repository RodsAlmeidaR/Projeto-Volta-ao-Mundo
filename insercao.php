<?php
include 'db_connect.php';

$username = 'admin';
$password = password_hash('admin123', PASSWORD_DEFAULT);
$role = 'admin';

$sql = "INSERT INTO usuarios (username, password, role)
        VALUES ('$username', '$password', '$role')";

if (mysqli_query($conn, $sql)) {
    echo "Usuário admin inserido com sucesso!";
} else {
    echo "Erro ao inserir usuário admin: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
