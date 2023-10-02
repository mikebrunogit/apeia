<table border="0">
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
$sql = "SELECT * FROM tab_tarefas";
$result = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

$ultimoPaciente = null; // Para rastrear o paciente atual

while ($tarefa = mysqli_fetch_array($result)) {
    $nomePaciente = $tarefa['pac_nome'];
    $nomeTarefa = $tarefa['tar_nome'];
    $descricaoTarefa = $tarefa['tar_descricao'];

    // Se o paciente mudou, feche o card anterior e comece um novo
    if ($nomePaciente != $ultimoPaciente) {
        if ($ultimoPaciente != null) {
            echo '</ul>';
            echo '<div class="linha"></div>';
            echo '<button class="botao">Botão</button>';
            echo '</div>';
            echo '</td>';
        }

        echo '<td>';
        echo '<div class="card">';
        echo '<div class="paciente">' . $nomePaciente . '</div>';
        echo '<ul class="tarefas">';
    }

    echo '<li>';
    echo '<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">';
    echo '<label class="form-check-label" for="flexCheckDefault">';
    echo $nomeTarefa;
    echo '</label>';
    echo '</li>';

    $ultimoPaciente = $nomePaciente;
}

// Feche o último card
if ($ultimoPaciente != null) {
    echo '</ul>';
    echo '<div class="linha"></div>';
    echo '<button class="botao">Botão</button>';
    echo '</div>';
    echo '</td>';
}


echo '</tr>';
echo '</table>';
$conn->close();
?>