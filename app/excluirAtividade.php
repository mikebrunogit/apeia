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

if (isset($_POST["exclusaoAtividades"])) {
    $paciente_id = $_POST["paciente_id"];
    $atividades_para_excluir = isset($_POST["atividade"]) ? $_POST["atividade"] : [];

    if (!empty($atividades_para_excluir)) {
        $atividades_para_excluir = implode(',', $atividades_para_excluir);
        $sql = "DELETE FROM tab_tarefas WHERE pac_id = $paciente_id AND tar_id IN ($atividades_para_excluir)";
        
        if ($conn->query($sql) === TRUE) {
            // Redirecione o usuário de volta à página atual
            header('Location: ' . $_SERVER['REQUEST_URI']);
            exit;
        } else {
            echo "Erro ao excluir atividades: " . $conn->error;
        }
    } else {
        // Nenhuma checkbox foi marcada, exiba um alert
        echo '';
    }
}

$conn->close();
?>
