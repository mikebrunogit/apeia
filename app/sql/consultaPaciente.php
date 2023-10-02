
    <div class="mb-3">
    <div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Pacientes</label>
  <select class="form-select" id="inputGroupSelect01" name="nome">
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
    echo '<option value='."$nome".'>'.$nome.'</option>';
    
    
}
echo '</select>';
$conn->close();
?>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Atividade</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="atividade"><br><br></input>
  <div class="input-group">
  <span class="input-group-text">Descrição</span>
  <textarea class="form-control" aria-label="With textarea" name="descricao"></textarea>
</div>
 </div>
</div>