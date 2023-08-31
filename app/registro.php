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

    $cadastro_nome = $_POST["nome"];
    $cadastro_email = $_POST["email"];
    $cadastro_senha = $_POST["senha"];
    $cadastro_numero = $_POST["numero"];
    
    $sql = "INSERT INTO tab_cuidador (cuid_nome, cuid_email, cuid_senha, cuid_telefone) VALUES ('$cadastro_nome', '$cadastro_email', '$cadastro_senha', '$cadastro_numero')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Cadastro bem-sucedido!";
    } else {
        echo "Erro de cadastro: " . $conn->error;
    }

$conn->close();
?>

</body>
</html>