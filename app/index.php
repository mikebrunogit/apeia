<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
    <link href="style.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet"/>
</head>
<body>
<?php
include "componentes/navbar.php";
?> 
    
</body>
</html>
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

