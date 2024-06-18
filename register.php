<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: index.php');
    exit;
}

$usernameError = $passwordError = $confirmPasswordError = '';
$username = $password = $confirmPassword = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'db_connect.php';
    if (empty(trim($_POST['username']))) {
        $usernameError = 'Por favor, insira um nome de usuário.';
    } else {
        // Prepara a declaração SQL para evitar injeção de SQL
        $sql = "SELECT id FROM users WHERE username = ?";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param('s', $param_username);
            $param_username = trim($_POST['username']);
            if ($stmt->execute()) {
                $stmt->store_result();
                if ($stmt->num_rows == 1) {
                    $usernameError = 'Este nome de usuário já está em uso.';
                } else {
                    $username = trim($_POST['username']);
                }
            } else {
                echo "Oops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }
            $stmt->close();
        }
    }
    if (empty(trim($_POST['password']))) {
        $passwordError = 'Por favor, insira uma senha.';
    } elseif (strlen(trim($_POST['password'])) < 6) {
        $passwordError = 'A senha deve ter pelo menos 6 caracteres.';
    } else {
        $password = trim($_POST['password']);
    }
    if (empty(trim($_POST["confirm_password"]))) {
        $confirmPasswordError = "Por favor, confirme a senha.";
    } else {
        $confirmPassword = trim($_POST["confirm_password"]);
        if (empty($passwordError) && ($password != $confirmPassword)) {
            $confirmPasswordError = "As senhas não coincidem.";
        }
    }
    if (empty($usernameError) && empty($passwordError) && empty($confirmPasswordError)) {
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param('ss', $param_username, $param_password);
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Criptografa a senha
            if ($stmt->execute()) {
                header('Location: login.php');
                exit;
            } else {
                echo "Oops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }
            $stmt->close();
        }
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Grécia</title>   
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body style="background-color:white;">

<?php include 'header.php'; ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">Registro</div>
                <div class="card-body">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label for="username">Nome de Usuário</label>
                            <input type="text" name="username" id="username" class="form-control <?php echo (!empty($usernameError)) ? 'is-invalid' : ''; ?>" value="<?php echo htmlspecialchars($username); ?>">
                            <span class="invalid-feedback"><?php echo $usernameError; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="password">Senha</label>
                            <input type="password" name="password" id="password" class="form-control <?php echo (!empty($passwordError)) ? 'is-invalid' : ''; ?>" value="<?php echo htmlspecialchars($password); ?>">
                            <span class="invalid-feedback"><?php echo $passwordError; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirmar Senha</label>
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control <?php echo (!empty($confirmPasswordError)) ? 'is-invalid' : ''; ?>" value="<?php echo htmlspecialchars($confirmPassword); ?>">
                            <span class="invalid-feedback"><?php echo $confirmPasswordError; ?></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                        </div>
                        <div class="text-center">
            Já possui conta? <a href="login.php">Logar</a>.
        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>

<?php include 'footer.php'; ?>

</body>
</html>
