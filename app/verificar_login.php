<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apeia";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM tab_cuidador WHERE cuid_email = '$email'";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($senha, $row['cuid_senha'])) {
        // Credenciais corretas, redirecionar para a página de sucesso
        $_SESSION['usuario_autenticado'] = true;
        header('Location: pagina_de_sucesso.php');
        exit();
    } else {
        // Credenciais incorretas, mostrar mensagem de erro
        $_SESSION['erro_login'] = 'Credenciais incorretas.';
        header('Location: login.php');
        exit();
    }
} else {
    // Erro na consulta SQL
    $_SESSION['erro_login'] = 'Erro na consulta ao banco de dados.';
    header('Location: login.php');
    exit();
}

$conn->close();
?>
