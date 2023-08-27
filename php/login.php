<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
</head>
<body>

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
    echo "Login bem-sucedido!";
} else {
    echo "Erro de login.";
}


$conn->close();
?>

</body>
</html>