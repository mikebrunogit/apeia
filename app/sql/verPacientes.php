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

  /* Estilos para o botão de atividades */
  .activities-button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 15px;
  }

  @media (max-width: 768px) {
    /* Estilos responsivos para telas menores (mobile) */
    .patient-box {
      margin: 10px 0;
    }
  }
</style>
<table border="1">
<tr>
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
    $sqlAtividades = "SELECT tar_nome FROM tab_tarefas WHERE pac_id = $pacienteID";
    $resultAtividades = mysqli_query($conn, $sqlAtividades);

    if (mysqli_num_rows($resultAtividades) > 0) {
        // O paciente tem atividades, mostrar a seção de atividades
        echo '<div class="activity-list">';
        echo '<h3>Atividades:</h3>';
        
        while ($atividade = mysqli_fetch_array($resultAtividades)) {
            echo '<label><input type="checkbox" name="atividade[]" value="' . $atividade['tar_nome'] . '">' . $atividade['tar_nome'] . '</label><br>';
        }
        
        echo '</div>'; // Fim da lista de atividades
    }

    // Botão "Cadastrar Atividade" (sempre visível)
    echo '<button class="activities-button" onclick="location.href=\'cadastroAtividades.php?paciente_id=' . $pacienteID . '\'">Cadastrar Atividade</button>';

    // Fim da "box" do paciente
    echo '</div>'; // Fechamento da "box"
}

echo '</tr>';
echo '</table><br><br><br><br>';
$conn->close();
?>
