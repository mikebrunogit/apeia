<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link href="style.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet"/>
</head>
<body>
<?php
include "componentes/navbarLogin.php";
?>

<?php
include "sql/verPacientes.php";
while ($registro = mysqli_fetch_array($result)) {
    $pacienteID = $registro['pac_id'];
    $nomePaciente = $registro['pac_nome'];
    $nomeTarefa = $registro['tar_nome'];
    $descricaoTarefa = $registro['tar_descricao'];

    // Início da "box" do paciente
    echo '<div class="patient-box">';
    echo '<div class="patient-name">' . $nomePaciente . '</div>';
    echo '<div class="patient-age">ID do Paciente: ' . $pacienteID . '</div>';
    if ($nomeTarefa && $descricaoTarefa) {
        // Existe uma tarefa associada ao paciente
        echo '<div class="patient-stage">Nome da Tarefa: ' . $nomeTarefa . '</div>';
        echo '<div class="patient-stage">Descrição da Tarefa: ' . $descricaoTarefa . '</div>';
        echo '<button class="activities-button" onclick="location.href=\'cadastrar_atividade.php?paciente_id=' . $pacienteID . '\'">Cadastrar Atividade</button>';
    } else {
        // Não há tarefa associada ao paciente
        echo '<div class="patient-stage">Sem Atividades</div>';
        echo '<button class="activities-button" onclick="location.href=\'cadastrar_atividade.php?paciente_id=' . $pacienteID . '\'">Cadastrar Atividade</button>';
    }
    // Fim da "box" do paciente

    echo '</div>'; // Fechamento da "box"
}
?>


</body>
</html>