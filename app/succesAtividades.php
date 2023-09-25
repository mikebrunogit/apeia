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
    $nomePaciente = $_POST["nome"];
    $atividadeNome = $_POST["ativdade"];
    $atividadeDescricao = $_POST["desrição"];
    
    // Consulta SQL para inserir dados na tabela tab_tarefas
    $sql = "INSERT INTO tab_tarefas (tar_descricao, tar_nome)
    SELECT pac_id, '$atividadeNome'
    FROM tab_paciente
    WHERE pac_nome = '$nomePaciente'";
    
    
    if ($conn->query($sql) === TRUE) {
        echo "Sucesso em cadastrar atividades";
    } else {
        echo "Erro de cadastro: " . $conn->error;
    }

$conn->close();
?>