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

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["cadastro_paciente"])) {
        // Verifica se o formulário de cadastro de paciente foi submetido
        $paciente_nome = $_POST["nome"];
        $paciente_idade = $_POST["idade"];
        $paciente_estagio = $_POST["estagio"];
        
        $sql = "INSERT INTO tab_paciente (pac_nome, pac_idade, pac_estagio) VALUES ('$paciente_nome', '$paciente_idade', '$paciente_estagio)";
        
        if ($conn->query($sql) === TRUE) {
            echo "Cadastro de paciente bem-sucedido!";
        } else {
            echo "Erro de cadastro de paciente: " . $conn->error;
        }
    }
    
    if (isset($_POST["excluir_atividades"]) && isset($_POST["atividade"])) {
        // Verifica se o formulário de exclusão de atividades foi submetido
        $atividadesExcluir = $_POST["atividade"];
        foreach ($atividadesExcluir as $atividadeID) {
            // Consulta SQL para excluir a atividade
            $sqlExcluirAtividade = "DELETE FROM tab_tarefas WHERE tar_id = $atividadeID";
            if ($conn->query($sqlExcluirAtividade) === TRUE) {
                echo "Atividade com ID $atividadeID excluída com sucesso.";
            } else {
                echo "Erro ao excluir atividade com ID $atividadeID: " . $conn->error;
            }
        }
    }
}
?>