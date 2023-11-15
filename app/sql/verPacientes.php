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
            // Recarregar a página para refletir as alterações
            header('Location: ' . $_SERVER['PHP_SELF']);
            exit;
        } else {
            echo "Erro ao excluir atividades: " . $conn->error;
        }
    } else {
        // Nenhuma checkbox foi marcada, exiba um alert
        echo '<script>alert("Por favor, marque pelo menos uma atividade para excluir.");</script>';
    }
}

if (isset($_POST["exclusaoPaciente"])) {
    $paciente_id = $_POST["paciente_id"];
    $sql = "DELETE FROM tab_paciente WHERE pac_id = $paciente_id";

    if ($conn->query($sql) === TRUE) {
        // Recarregar a página para refletir as alterações
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    } else {
        echo "Erro ao excluir paciente: " . $conn->error;
    }
}

$sql = "SELECT * FROM tab_paciente";
$result = mysqli_query($conn, $sql) or die("Erro ao retornar dados");

while ($registro = mysqli_fetch_array($result)) {
    $nome = $registro['pac_nome'];
    $idade = $registro['pac_idade'];
    $estagio = $registro['pac_estagio'];

    // Início da "box" do paciente
    echo '<div class="patient-box">';
    echo '<div class="patient-name">' . $nome . '</div>';
    echo '<div class="patient-age">' . $idade . ' anos</div>';
    echo '<div class="patient-stage">Estágio: ' . $estagio . '</div>';

    // Consulta SQL para buscar as atividades do paciente a partir da tabela tab_tarefas
    $pacienteID = $registro['pac_id'];
    $sqlAtividades = "SELECT tar_id, tar_nome FROM tab_tarefas WHERE pac_id = $pacienteID";
    $resultAtividades = mysqli_query($conn, $sqlAtividades);

    if (mysqli_num_rows($resultAtividades) > 0) {
        // O paciente tem atividades, mostrar a seção de atividades
        echo '<div = class="null"><form method="post"></div>';
        echo '<HR><h5>Atividades</h5>';
        echo '<input type="hidden" name="paciente_id" value="' . $pacienteID . '">';
        echo '<input type="hidden" name="exclusaoAtividades" value="1">';
        echo '<ul class="activity-list">';

        while ($atividade = mysqli_fetch_array($resultAtividades)) {
            $atividadeID = $atividade['tar_id'];
            echo '<li class="activity-item"><label><input type="checkbox" name="atividade[]" value="' . $atividadeID . '"> ' . $atividade['tar_nome'] . '</label></li>';
        }

        echo '</ul>'; // Fim da lista de atividades

        // Botão "Excluir Tarefas" (aparece apenas se houver atividades)
        echo '<button class="delete-button" type="submit">Excluir Tarefas</button>';
        echo '</form><br>';
    }

    // Botão "Cadastrar Atividade"
    echo '<br><a class="activities-button" href="cadastroAtividades.php">Cadastrar Atividade</a><br><br>';

    // Botão "Excluir Paciente"
    echo '<div class="null"><form method="post"></div>';
    echo '<input type="hidden" name="paciente_id" value="' . $pacienteID . '">';
    echo '<input type="hidden" name="exclusaoPaciente" value="1">';
    echo '<button class="delete-patient-button" type="submit">Excluir Paciente</button>';
    echo '</form>';

    // Fim da "box" do paciente
    echo '</div>'; // Fechamento da "box"
}

$conn->close();
?>
