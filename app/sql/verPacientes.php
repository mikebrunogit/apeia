<style>
  /* Estilos para a "box" do paciente */
  .patient-box {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 20px;
    margin: 10px;
  }

  /* Estilos para o nome do paciente */
  .patient-name {
    font-size: 24px;
    font-weight: bold;
  }

  /* Estilos para a idade do paciente */
  .patient-age {
    font-size: 18px;
  }

  /* Estilos para a lista de atividades */
  .activity-list {
    list-style-type: none;
    padding: 0;
  }

  /* Estilos para os itens da lista de atividades */
  .activity-item {
    margin-bottom: 5px;
  }

  /* Estilos para o botão de cadastro de atividades */
  .activities-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-right: 10px;
  }

  /* Estilos para o botão de exclusão de tarefas */
  .delete-button {
    padding: 10px 20px;
    background-color: #ff0000;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-right: 10px;
  }

</style>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apeia";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

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
        echo '<form method="post">';
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
        echo '</form>';
    }

    // Botão "Cadastrar Atividade"
    echo '<br><a class="activities-button" href="cadastroAtividades.php">Cadastrar Atividade</a>';

    // Fim da "box" do paciente
    echo '</div>'; // Fechamento da "box"
}



$conn->close();
?>
