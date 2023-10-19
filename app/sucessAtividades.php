<!DOCTYPE html>
<html lang="pt-br">
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
    $idPaciente = $_POST["idPaciente"];
    $atividadeNome = $_POST["atividade"];
    $atividadeDescricao = $_POST["descricao"];
    
    // Consulta SQL para inserir dados na tabela tab_tarefas
$sql = "INSERT INTO tab_tarefas (pac_id, tar_nome, tar_descricao)
    VALUES ('$idPaciente', '$atividadeNome', '$atividadeDescricao')";
    
    
    if ($conn->query($sql) === TRUE) {
        echo "Sucesso em cadastrar atividades";
    } else {
        echo "Erro de cadastro: " . $conn->error;
    }


    $conn->close();
    ?>
</body>
</html>