<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apeia";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
$login_email = $_POST["email"];
$login_senha = $_POST["senha"];

$sql = "SELECT * FROM tab_cuidador WHERE cuid_email='$login_email' AND cuid_senha='$login_senha'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    echo "Bem vindo !";
} else {
    echo "Erro de login.";
}
$conn->close();
?>

