<?php
session_start();

include 'php/config.php';

// Verificar se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verificar as credenciais
    if ($email === $usuarioValido && $senha === $senhaValida) {
        // Credenciais corretas, redirecionar para a página de sucesso
        $_SESSION['usuario_autenticado'] = true;
        header('Location: home.php');
        exit();
    } else {
        // Credenciais incorretas, mostrar mensagem de erro
        $erro_login = 'Credenciais incorretas.';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="style.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<?php

    include 'componentes/navbar.php'
    ?>
    <?php
    session_start();
    
    // Verificar se há uma mensagem de erro
    if (isset($_SESSION['erro_login'])) {
        echo '<p style="color: red;">' . $_SESSION['erro_login'] . '</p>';
        unset($_SESSION['erro_login']); // Limpar a mensagem de erro
    }
    ?>
    
    
  <form action="verificar_login.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
