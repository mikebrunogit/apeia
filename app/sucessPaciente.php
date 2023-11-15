<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso!</title>
    <link rel="icon" type="image/x-icon" href="./assets/logoCircle.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
            echo "Cadastro de paciente bem-sucedido!";
        } else {
            echo "Erro de cadastro de paciente: " . $conn->error;
        }
        


?>