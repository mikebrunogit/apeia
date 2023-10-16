<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso!</title>
    <link rel="icon" type="image/x-icon" href="./assets/logoCircle.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet"/>
</head>
<body>
<?php
include "componentes/navbarLogin.php";
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
    $paciente_nome = $_POST["nome"];
    $paciente_idade = $_POST["idade"];
    $paciente_estagio = $_POST["estagio"];
    
    $sql = "INSERT INTO tab_paciente (pac_nome, pac_idade, pac_estagio) VALUES ('$paciente_nome', '$paciente_idade', '$paciente_estagio')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Cadastro de bem-sucedido!";
    } else {
        echo "Erro de cadastro: " . $conn->error;
    }

$conn->close();
?>