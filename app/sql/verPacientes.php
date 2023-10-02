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
$result = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

while ($registro = mysqli_fetch_array($result))
{
    $nome = $registro['pac_nome'];
    $idade = $registro['pac_idade'];
    $estagio = $registro['pac_estagio'];
    echo '<div class="card" style="width: 18rem;">';
    echo '<img src="..." class="card-img-top" alt="...">';
    echo '<div class="card-body">';
    echo '<h5 class="">'.$nome.'</h5>';
    echo '<p class="card-text">'.$estagio.'<br>'.$idade.'</p>';
    echo '<a href="#" class="btn btn-primary">Go somewhere</a>';
    echo '</div>';
    echo '</div><br><br>';
}

echo '</tr>';
echo '</table><br><br><br><br>';
$conn->close();
?>